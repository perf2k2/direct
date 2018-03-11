<?php

namespace direct;

use direct\api\methods\DynamicTextAdTargetsAdd;
use direct\api\methods\DynamicTextAdTargetsGet;
use direct\api\services\DynamicTextAdTargetsService;
use direct\api\SetBidsMethod;
use direct\api\DeleteMethod;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;

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