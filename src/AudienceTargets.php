<?php

namespace perf2k2\direct;

use api\methods\AudienceTargetsAdd;
use api\services\AudienceTargetsService;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AudienceTargetsGet;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class AudienceTargets
{
    public static function add(): AudienceTargetsAdd
    {
        return (new AudienceTargetsService())->add();
    }

    public static function get(): AudienceTargetsGet
    {
        return (new AudienceTargetsService())->get();
    }

    public static function delete(): DeleteMethod
    {
        return (new AudienceTargetsService())->delete();
    }

    public static function resume(): ResumeMethod
    {
        return (new AudienceTargetsService())->resume();
    }

    public static function suspend(): SuspendMethod
    {
        return (new AudienceTargetsService())->suspend();
    }

    public static function setBids(): SetBidsMethod
    {
        return (new AudienceTargetsService())->setBids();
    }
}