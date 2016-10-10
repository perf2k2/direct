<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Ads extends Service implements ServiceInterface
{
    protected $apiName = 'ads';

    public static function get(): AdsGet
    {
        return new AdsGet((new self())->getApiName());
    }
}