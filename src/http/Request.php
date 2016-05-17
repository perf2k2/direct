<?php

namespace perf2k2\direct\http;

use perf2k2\direct\Connector;
use perf2k2\direct\api\params\ParamsInterface;

class Request
{
    private $connection;
    private $service;
    private $method;
    private $params;
    private $host = 'https://api.direct.yandex.com/json/v5/';
    private $sandboxHost = 'https://api-sandbox.direct.yandex.com/json/v5/';

    public function __construct(Connector &$connection, string $service, string $method, ParamsInterface $params)
    {
        $this->connection = $connection;
        $this->service = $service;
        $this->method = $method;
        $this->params = $params;
    }

    public function getUri(): string
    {
        if ($this->connection->isSandbox()) {
            return $this->sandboxHost . $this->service;
        } else {
            return $this->host . $this->service;
        }
    }

    public function getHeaders(): array
    {
        return [
            'Authorization: Bearer ' . $this->connection->getToken(),
            'Client-Login: ' . $this->connection->getLogin(),
            'Accept-Language: ' . $this->connection->getAcceptLanguage(),
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