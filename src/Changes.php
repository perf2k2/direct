<?php

namespace perf2k2\direct;

use api\methods\ChangesCheck;

class Changes
{
    public static function getApiName(): string
    {
        return 'changes';
    }

    public static function check(): ChangesCheck
    {
        return new ChangesCheck(self::getApiName());
    }
}