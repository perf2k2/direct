<?php

namespace direct;

use direct\api\services\BidsService;
use direct\api\methods\BidsGet;
use direct\api\methods\BidsSet;
use direct\api\methods\BidsSetAuto;

class Bids
{
    public static function get(): BidsGet
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