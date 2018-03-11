<?php

namespace direct;

use direct\api\services\DictionariesService;
use direct\api\methods\DictionariesGet;

class Dictionaries
{
    public static function get(): DictionariesGet
    {
        return (new DictionariesService())->get();
    }
}