<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdExtensionsAdd;

class AdExtensions
{
    public static function getApiName(): string
    {
        return 'adextensions';
    }
    
    public static function add(): AdExtensionsAdd
    {
        return new AdExtensionsAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }
}