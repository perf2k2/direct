<?php

namespace direct;

use direct\api\methods\AdExtensionsGet;
use direct\api\services\AdExtensionsService;
use direct\api\DeleteMethod;
use direct\api\methods\AdExtensionsAdd;

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