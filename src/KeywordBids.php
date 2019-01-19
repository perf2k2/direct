<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\KeywordBidsGet;
use perf2k2\direct\api\methods\KeywordBidsSet;
use perf2k2\direct\api\services\KeywordBidsService;

class KeywordBids
{
    public static function get(): KeywordBidsGet
    {
        return (new KeywordBidsService())->get();
    }

    public static function set(): KeywordBidsSet
    {
        return (new KeywordBidsService())->set();
    }
}