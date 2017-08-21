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
    private $host = 'https://api.direct.yandex.com/json/v5/';
    private $sandboxHost = 'https://api-sandbox.direct.yandex.com/json/v5/';

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
            return $this->sandboxHost . $this->service;
        } else {
            return $this->host . $this->service;
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

    public function send($attempt = 0): string
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getUri());
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getBody());
        $result = curl_exec($ch);

        // Repeat request if the api host could not resolve
        if(curl_exec($ch) === false) {
            $errorNumber = curl_errno($ch);
            $maxAttempts = (int)getenv('MAX_CONNECTION_ATTEMPTS');
            $attempt++;

            if ($errorNumber === self::CURLE_COULDNT_RESOLVE_HOST_ERROR && $attempt < $maxAttempts) {
                return $this->send($attempt);
            } else {
                throw new HttpException(curl_error($ch) . ' (attempts: ' . $attempt . ')', $errorNumber);
            }
        }

        curl_close($ch);

        return $result;
    }
}