<?php

namespace perf2k2\direct;

use api\methods\AudienceTargetsAdd;
use perf2k2\direct\api\methods\AudienceTargetsGet;

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
}