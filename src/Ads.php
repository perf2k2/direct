<?php

namespace perf2k2\direct;

use api\services\AdsService;
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
        return (new AdsService())->add();
    }

    public static function archive(): ArchiveMethod
    {
        return (new AdsService())->archive();
    }

    public static function delete(): DeleteMethod
    {
        return (new AdsService())->delete();
    }

    public static function get(): AdsGet
    {
        return (new AdsService())->get();
    }

    public static function moderate(): ModerateMethod
    {
        return (new AdsService())->moderate();
    }

    public static function resume(): ResumeMethod
    {
        return (new AdsService())->resume();
    }

    public static function suspend(): SuspendMethod
    {
        return (new AdsService())->suspend();
    }

    public static function unarchive(): UnarchiveMethod
    {
        return (new AdsService())->unarchive();
    }

    public static function update(): AdsUpdate
    {
        return (new AdsService())->update();
    }
}