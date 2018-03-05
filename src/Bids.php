<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\methods\BidsSetAuto;

class Bids
{
    public function getApiName(): string
    {
        return 'bids';
    }

    public static function get(): BidsGet
    {
        return new BidsGet(self::getApiName());
    }

    public static function set(): BidsSet
    {
        return new BidsSet(self::getApiName());
    }

    public static function setAuto(): BidsSetAuto
    {
        return new BidsSetAuto(self::getApiName());
    }
}