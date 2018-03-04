<?php

namespace perf2k2\direct;

use api\methods\AdExtensionsGet;
use api\services\AdExtensionsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdExtensionsAdd;

class AdExtensions
{
    public static function add(): AdExtensionsAdd
    {
        return (new AdExtensionsService())->add();
    }
    
    public static function get(): AdExtensionsGet
    {
        return (new AdExtensionsService())->get();
    }
    
    public static function delete(): DeleteMethod
    {
        return (new AdExtensionsService())->delete();
    }
}