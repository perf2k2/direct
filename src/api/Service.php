<?php

namespace perf2k2\direct\api;

abstract class Service
{
    protected $apiName;

    public function getApiName(): string
    {
        return $this->apiName;
    }
}