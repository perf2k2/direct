<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\DictionariesGet;

class Dictionaries
{
    public function getApiName(): string
    {
        return 'dictionaries';
    }
    
    public static function get(): DictionariesGet
    {
        return new DictionariesGet(self::getApiName());
    }
}