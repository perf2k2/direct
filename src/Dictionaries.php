<?php

namespace perf2k2\direct;

use api\services\DictionariesService;
use perf2k2\direct\api\methods\DictionariesGet;

class Dictionaries
{
    public static function get(): DictionariesGet
    {
        return (new DictionariesService())->get();
    }
}