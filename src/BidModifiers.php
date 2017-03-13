<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\BidModifiersAdd;
use perf2k2\direct\api\methods\BidModifiersGet;
use perf2k2\direct\api\methods\BidModifiersSet;
use perf2k2\direct\api\methods\BidModifiersToggle;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class BidModifiers extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'bidmodifiers';
    }

    public static function add(): BidModifiersAdd
    {
        return new BidModifiersAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): BidModifiersGet
    {
        return new BidModifiersGet(self::getApiName());
    }

    public static function set(): BidModifiersSet
    {
        return new BidModifiersSet(self::getApiName());
    }

    public static function toggle(): BidModifiersToggle
    {
        return new BidModifiersToggle(self::getApiName());
    }
}