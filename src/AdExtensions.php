<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;

class AdExtensions
{
    public static function getApiName(): string
    {
        return 'adextensions';
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }
}