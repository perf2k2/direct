<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\ParamsInterface;

class Request
{
    private $service;
    private $method;
    private $params;
    private $host = 'https://api.direct.yandex.com/json/v5/';
    
    public function __construct(string $service, string $method, ParamsInterface $params)
    {
        $this->service = $service;
        $this->method = $method;
        $this->params = $params;
    }

    public function getUri(): string
    {
        return $this->host . $this->service;
    }

    public function getHeaders(Connection &$connection): array
    {
        return [
            'Authorization: Bearer ' . $connection->getToken(),
            'Client-Login: ' . $connection->getLogin(),
            'Accept-Language: ' . $connection->getAcceptLanguage(),
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
}