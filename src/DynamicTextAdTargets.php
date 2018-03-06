<?php

namespace perf2k2\direct;

use api\methods\DynamicTextAdTargetsAdd;
use api\methods\DynamicTextAdTargetsGet;
use api\services\DynamicTextAdTargetsService;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class DynamicTextAdTargets
{
    public static function add(): DynamicTextAdTargetsAdd
    {
        return (new DynamicTextAdTargetsService())->add();
    }
    
    public static function get(): DynamicTextAdTargetsGet
    {
        return (new DynamicTextAdTargetsService())->get();
    }

    public static function delete(): DeleteMethod
    {
        return (new DynamicTextAdTargetsService())->delete();
    }

    public static function resume(): ResumeMethod
    {
        return (new DynamicTextAdTargetsService())->resume();
    }

    public static function suspend(): SuspendMethod
    {
        return (new DynamicTextAdTargetsService())->suspend();
    }
    
    public static function setBids(): SetBidsMethod
    {
        return (new DynamicTextAdTargetsService())->setBids();
    }
}