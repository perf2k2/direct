<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\DynamicTextAdTargetsAdd;
use perf2k2\direct\api\methods\DynamicTextAdTargetsGet;
use perf2k2\direct\api\services\DynamicTextAdTargetsService;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class DynamicTextAdTargets
{
    public static function add(): DynamicTextAdTargetsAdd
    {
        return (new DynamicTextAdTargetsService())->getAddMethod();
    }
    
    public static function get(): DynamicTextAdTargetsGet
    {
        return (new DynamicTextAdTargetsService())->getGetMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new DynamicTextAdTargetsService())->getDeleteMethod();
    }

    public static function resume(): ResumeMethod
    {
        return (new DynamicTextAdTargetsService())->getResumeMethod();
    }

    public static function suspend(): SuspendMethod
    {
        return (new DynamicTextAdTargetsService())->getSuspendMethod();
    }
    
    public static function setBids(): SetBidsMethod
    {
        return (new DynamicTextAdTargetsService())->getSetBidsMethod();
    }
}