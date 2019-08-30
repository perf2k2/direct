<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\DictionariesService;
use perf2k2\direct\api\methods\DictionariesGet;

class Dictionaries
{
    public static function get(): DictionariesGet
    {
        return (new DictionariesService())->get();
    }
}