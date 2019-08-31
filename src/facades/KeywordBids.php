<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\KeywordBidsGet;
use perf2k2\direct\api\methods\KeywordBidsSet;
use perf2k2\direct\api\methods\KeywordBidsSetAuto;
use perf2k2\direct\api\services\KeywordBidsService;

class KeywordBids
{
    public static function get(): KeywordBidsGet
    {
        return (new KeywordBidsService())->getGetMethod();
    }

    public static function set(): KeywordBidsSet
    {
        return (new KeywordBidsService())->getSetMethod();
    }

    public static function setAuto(): KeywordBidsSetAuto
    {
        return (new KeywordBidsService())->getSetAutoMethod();
    }
}