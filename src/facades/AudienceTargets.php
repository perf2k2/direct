<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\AudienceTargetsAdd;
use perf2k2\direct\api\services\AudienceTargetsService;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AudienceTargetsGet;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class AudienceTargets
{
    public static function add(): AudienceTargetsAdd
    {
        return (new AudienceTargetsService())->getAddMethod();
    }

    public static function get(): AudienceTargetsGet
    {
        return (new AudienceTargetsService())->getGetMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new AudienceTargetsService())->getDeleteMethod();
    }

    public static function resume(): ResumeMethod
    {
        return (new AudienceTargetsService())->getResumeMethod();
    }

    public static function suspend(): SuspendMethod
    {
        return (new AudienceTargetsService())->getSuspendMethod();
    }

    public static function setBids(): SetBidsMethod
    {
        return (new AudienceTargetsService())->getSetBidsMethod();
    }
}