<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Bids extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'bids';
    }

    public static function get(): BidsGet
    {
        return new BidsGet((new self())->getApiName());
    }

    public static function set(): BidsSet
    {
        return new BidsSet((new self())->getApiName());
    }
}