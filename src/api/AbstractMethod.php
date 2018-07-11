<?php

namespace direct\api;

abstract class AbstractMethod implements ApiObjectInterface, ApiParametrizedObjectInterface
{
    protected $serviceName;
    protected $apiName;

    public function __construct(AbstractService $service)
    {
        $this->serviceName = $service->getApiName();
    }
    
    abstract public function getApiName(): string;

    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    public function getData(): array
    {
        return get_object_vars($this);
    }
}