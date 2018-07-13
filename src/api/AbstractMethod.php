<?php

namespace perf2k2\direct\api;

abstract class AbstractMethod
{
    protected $serviceName;
    protected $apiName;

    public function __construct(AbstractService $service)
    {
        $this->serviceName = $service->getApiName();
    }

    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    public function getData(): array
    {
        return get_object_vars($this);
    }
}