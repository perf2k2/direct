<?php

namespace perf2k2\direct\http;

use perf2k2\direct\exceptions\HttpException;

class Request
{
    private $service;
    private $method;
    private $params;
    private $login;
    private $token;
    private $lang;
    private $isSandbox;
    private $host = 'https://api.direct.yandex.com/json/v5/';
    private $sandboxHost = 'https://api-sandbox.direct.yandex.com/json/v5/';

    const CURLE_COULDNT_RESOLVE_HOST_ERROR = 6;

    public function __construct(bool $isSandbox)
    {
        $this->login = getenv('YANDEX_LOGIN');
        $this->token = getenv('DIRECT_API_TOKEN');
        $this->lang = getenv('DIRECT_ACCEPT_LANGUAGE');
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
            'Authorization: Bearer ' . $this->token,
            'Client-Login: ' . $this->login,
            'Accept-Language: ' . $this->lang,
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