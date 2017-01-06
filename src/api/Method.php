<?php

namespace perf2k2\direct\api;

use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Request;
use perf2k2\direct\http\Response;

abstract class Method
{
    protected $serviceName;
    protected $apiName;

    public function __construct(string $serviceName)
    {
        $this->serviceName = $serviceName;
    }

    public function getConnection($connection): Connection
    {
        if ($connection === null) {
            return new Connection();
        } else {
            return $connection;
        }
    }

    public function createRequest(Connection $connection): Request
    {
        return $connection->createRequest()
            ->setService($this->serviceName)
            ->setMethod(static::getApiName())
            ->setParameters($this->getMethodData());
    }

    public function sendRequest(Connection $connection, Request $request): Response
    {
        return $connection->sendRequest($request);
    }

    public function createAndSendRequest($connection = null): Response
    {
        $connection = $this->getConnection($connection);
        $request = $this->createRequest($connection);
        return $this->sendRequest($connection, $request);
    }

    public function getMethodData(): array
    {
        $params = get_object_vars($this);

        unset($params['serviceName']);
        unset($params['apiName']);

        return $params;
    }
}