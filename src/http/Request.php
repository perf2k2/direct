<?php

namespace perf2k2\direct\http;

use perf2k2\direct\exceptions\HttpException;

class Request
{
    private $login;
    private $token;
    private $lang;
    private $isSandbox;
    private $host = 'https://api.direct.yandex.com/json/v5/';
    private $sandboxHost = 'https://api-sandbox.direct.yandex.com/json/v5/';

    public function __construct(string $login, string $token, string $lang, bool $isSandbox)
    {
        $this->login = $login;
        $this->token = $token;
        $this->lang = $lang;
        $this->isSandbox = $isSandbox;
    }

    private function getUri(string $service): string
    {
        if ($this->isSandbox) {
            return $this->sandboxHost . $service;
        } else {
            return $this->host . $service;
        }
    }

    private function getHeaders(): array
    {
        return [
            'Authorization: Bearer ' . $this->token,
            'Client-Login: ' . $this->login,
            'Accept-Language: ' . $this->lang,
            'Content-Type: application/json; charset=utf-8',
        ];
    }

    private function getBody(string $method, array $params): string
    {
        return json_encode([
            'method' => $method,
            'params' => $params,
        ]);
    }

    public function send(string $service, string $method, array $params, $attempt = 0): string
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->getUri($service));
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->getBody($method, $params));
        $result = curl_exec($ch);

        if(curl_exec($ch) === false) {
            $errorNumber = curl_errno($ch);
            $maxAttempts = (int)getenv('MAX_CONNECTION_ATTEMPTS');
            $attempt++;

            // CURLE_COULDNT_RESOLVE_HOST
            if ($errorNumber === 6 && $attempt < $maxAttempts) {
                return $this->send($service, $method, $params, $attempt);
            } else {
                throw new HttpException(curl_error($ch) . ' (attempts: ' . $attempt . ')', $errorNumber);
            }
        }

        curl_close($ch);

        return $result;
    }
}