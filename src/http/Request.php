<?php

namespace perf2k2\direct\http;

use perf2k2\direct\credentials\CredentialInterface;
use perf2k2\direct\exceptions\HttpException;

class Request
{
    private $credential;
    private $service;
    private $method;
    private $params;
    private $acceptLanguage;
    private $isSandbox;
    private $connectionAttempts = 0;

    const API_HOST = 'https://api.direct.yandex.com/json/v5/';
    const API_SANDBOX_HOST = 'https://api-sandbox.direct.yandex.com/json/v5/';
    const CURLE_COULDNT_RESOLVE_HOST_ERROR = 6;

    public function __construct(CredentialInterface $credential, string $acceptLanguage, bool $isSandbox)
    {
        $this->credential = $credential;
        $this->acceptLanguage = $acceptLanguage;
        $this->isSandbox = $isSandbox;
    }

    public function setService(string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function setParameters(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function getUri(): string
    {
        if ($this->isSandbox) {
            return self::API_SANDBOX_HOST . $this->service;
        } else {
            return self::API_HOST . $this->service;
        }
    }

    public function getHeaders(): array
    {
        return [
            'Authorization: Bearer ' . $this->credential->getAuthToken(),
            'Client-Login: ' . $this->credential->getClientLogin(),
            'Accept-Language: ' . $this->acceptLanguage,
            'Content-Type: application/json; charset=utf-8',
        ];
    }

    public function getBody(): string
    {
        return json_encode([
            'method' => $this->method,
            'params' => $this->params,
        ]);
    }

    public function send(int $maxConnectionAttempts = 5, int $dnsCacheTimeout = 600): string
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getUri());
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, $dnsCacheTimeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getBody());
        $result = curl_exec($ch);

        // Repeat request if the api host could not resolve
        if(curl_exec($ch) === false) {
            $errorNumber = curl_errno($ch);
            $maxAttempts = $maxConnectionAttempts;
            $this->connectionAttempts++;

            if ($errorNumber === self::CURLE_COULDNT_RESOLVE_HOST_ERROR && $this->connectionAttempts < $maxAttempts) {
                return $this->send();
            } else {
                $attempts = $this->connectionAttempts;
                $this->connectionAttempts = 0;
                throw new HttpException(curl_error($ch) . ' (attempts: ' . $attempts . ')', $errorNumber);
            }
        }

        curl_close($ch);
        $this->connectionAttempts = 0;

        return $result;
    }
}