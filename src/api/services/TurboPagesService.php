<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\TurboPagesGet;

class TurboPagesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'turbopages';
    }

    public function getGetMethod(): TurboPagesGet
    {
        return new TurboPagesGet($this);
    }
}