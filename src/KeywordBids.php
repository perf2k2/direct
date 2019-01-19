<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\KeywordBidsGet;
use perf2k2\direct\api\services\KeywordBidsService;

class KeywordBids
{
    public static function get(): KeywordBidsGet
    {
        return (new KeywordBidsService())->get();
    }
}