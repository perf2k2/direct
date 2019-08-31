<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\AdsService;
use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdsAdd;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsUpdate;
use perf2k2\direct\api\ModerateMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

class Ads
{
    public static function add(): AdsAdd
    {
        return (new AdsService())->getAddMethod();
    }

    public static function archive(): ArchiveMethod
    {
        return (new AdsService())->getArchiveMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new AdsService())->getDeleteMethod();
    }

    public static function get(): AdsGet
    {
        return (new AdsService())->getGetMethod();
    }

    public static function moderate(): ModerateMethod
    {
        return (new AdsService())->getModerateMethod();
    }

    public static function resume(): ResumeMethod
    {
        return (new AdsService())->getResumeMethod();
    }

    public static function suspend(): SuspendMethod
    {
        return (new AdsService())->getSuspendMethod();
    }

    public static function unarchive(): UnarchiveMethod
    {
        return (new AdsService())->getUnArchiveMethod();
    }

    public static function update(): AdsUpdate
    {
        return (new AdsService())->getUpdateMethod();
    }
}