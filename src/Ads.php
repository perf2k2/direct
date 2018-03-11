<?php

namespace direct;

use direct\api\services\AdsService;
use direct\api\ArchiveMethod;
use direct\api\DeleteMethod;
use direct\api\methods\AdsAdd;
use direct\api\methods\AdsGet;
use direct\api\methods\AdsUpdate;
use direct\api\ModerateMethod;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;
use direct\api\UnarchiveMethod;

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