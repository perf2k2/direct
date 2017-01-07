<?php

namespace perf2k2\direct;

use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdsAdd;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsUpdate;
use perf2k2\direct\api\ModerateMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

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

    public static function archive(): ArchiveMethod
    {
        return new ArchiveMethod((new self())->getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod((new self())->getApiName());
    }

    public static function get(): AdsGet
    {
        return new AdsGet((new self())->getApiName());
    }

    public static function moderate(): ModerateMethod
    {
        return new ModerateMethod((new self())->getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod((new self())->getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod((new self())->getApiName());
    }

    public static function unarchive(): UnarchiveMethod
    {
        return new UnarchiveMethod((new self())->getApiName());
    }

    public static function update(): AdsUpdate
    {
        return new AdsUpdate((new self())->getApiName());
    }
}