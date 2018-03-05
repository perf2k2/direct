<?php

namespace perf2k2\direct;

use api\services\BidsService;
use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\methods\BidsSetAuto;

class Bids
{
    public  function get(): BidsGet
    {
        return (new BidsService())->get();
    }

    public static function set(): BidsSet
    {
        return (new BidsService())->set();
    }

    public static function setAuto(): BidsSetAuto
    {
        return (new BidsService())->setAuto();
    }
}