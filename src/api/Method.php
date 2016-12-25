<?php

namespace perf2k2\direct\api;

use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Response;

abstract class Method
{
    protected $serviceName;
    protected $apiName;

    public function __construct(string $serviceName)
    {
        $this->serviceName = $serviceName;
    }

    public function getApiName(): string
    {
        return $this->apiName;
    }

    public function sendRequest($connection = null): Response
    {
        $connection = $this->getConnection($connection);
        $request = $connection->createRequest()
            ->setService($this->serviceName)
            ->setMethod(self::getApiName())
            ->setParameters($this->getMethodData());

        return $connection->sendRequest($request);
    }

    public function getMethodData(): array
    {
        $params = get_object_vars($this);

        unset($params['serviceName']);
        unset($params['apiName']);

        return $params;
    }

    protected static function getConnection($connection): Connection
    {
        if ($connection === null) {
            return new Connection();
        } else {
            return $connection;
        }
    }
}