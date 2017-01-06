<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AdsArchive;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsSuspend;
use perf2k2\direct\api\methods\AdsUnarchive;
use perf2k2\direct\api\methods\AdsUpdate;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Ads extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'ads';
    }

    public static function archive(): AdsArchive
    {
        return new AdsArchive((new self())->getApiName());
    }

    public static function get(): AdsGet
    {
        return new AdsGet((new self())->getApiName());
    }

    public static function suspend(): AdsSuspend
    {
        return new AdsSuspend((new self())->getApiName());
    }

    public static function unarchive(): AdsUnarchive
    {
        return new AdsUnarchive((new self())->getApiName());
    }

    public static function update(): AdsUpdate
    {
        return new AdsUpdate((new self())->getApiName());
    }
}