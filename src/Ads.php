<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AdsAdd;
use perf2k2\direct\api\methods\AdsArchive;
use perf2k2\direct\api\methods\AdsDelete;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsModerate;
use perf2k2\direct\api\methods\AdsResume;
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
    public static function add(): AdsAdd
    {
        return new AdsAdd((new self())->getApiName());
    }

    public static function archive(): AdsArchive
    {
        return new AdsArchive((new self())->getApiName());
    }

    public static function delete(): AdsDelete
    {
        return new AdsDelete((new self())->getApiName());
    }

    public static function get(): AdsGet
    {
        return new AdsGet((new self())->getApiName());
    }

    public static function moderate(): AdsModerate
    {
        return new AdsModerate((new self())->getApiName());
    }

    public static function resume(): AdsResume
    {
        return new AdsResume((new self())->getApiName());
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