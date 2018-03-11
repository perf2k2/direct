<?php

namespace direct;

use direct\api\methods\AudienceTargetsAdd;
use direct\api\services\AudienceTargetsService;
use direct\api\SetBidsMethod;
use direct\api\DeleteMethod;
use direct\api\methods\AudienceTargetsGet;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;

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