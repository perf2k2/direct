<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\BidsService;
use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\methods\BidsSetAuto;

class Bids
{
    public static function get(): BidsGet
    {
        return (new BidsService())->getGetMethod();
    }

    public static function set(): BidsSet
    {
        return (new BidsService())->getSetMethod();
    }

    public static function setAuto(): BidsSetAuto
    {
        return (new BidsService())->getSetAutoMethod();
    }
}