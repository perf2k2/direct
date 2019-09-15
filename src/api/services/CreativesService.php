<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\CreativesGet;

class CreativesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'creatives';
    }

    public function getGetMethod(): CreativesGet
    {
        return new CreativesGet($this);
    }
}