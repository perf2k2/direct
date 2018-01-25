<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;

class DynamicTextAdTargets
{
    public static function getApiName(): string
    {
        return 'dynamictextadtargets';
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }
}