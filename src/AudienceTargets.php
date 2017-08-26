<?php

namespace perf2k2\direct;

use api\methods\AudienceTargetsAdd;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AudienceTargetsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class AudienceTargets
{
    public static function getApiName(): string
    {
        return 'audiencetargets';
    }

    public static function add(): AudienceTargetsAdd
    {
        return new AudienceTargetsAdd(self::getApiName());
    }

    public static function get(): AudienceTargetsGet
    {
        return new AudienceTargetsGet(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod(self::getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod(self::getApiName());
    }

    public static function setBids(): BidsSet
    {
        return new BidsSet(self::getApiName());
    }
}