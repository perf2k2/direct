<?php

namespace direct\api;

use direct\http\Connection;
use direct\http\Request;
use direct\http\Response;

abstract class AbstractMethod implements ApiObjectInterface
{
    protected $serviceName;
    protected $apiName;

    public function __construct(AbstractService $service)
    {
        $this->serviceName = $service->getApiName();
    }
    
    abstract public function getApiName(): string;

    public function createRequest(Connection $connection): Request
    {
        return $connection->createRequest()
            ->setService($this->serviceName)
            ->setMethod($this->getApiName())
            ->setParameters($this->getMethodData());
    }

    public function sendRequest(Connection $connection, Request $request): Response
    {
        return $connection->sendRequest($request);
    }

    public function createAndSendRequest(Connection $connection): Response
    {
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