<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\BidModifiersService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\BidModifiersAdd;
use perf2k2\direct\api\methods\BidModifiersGet;
use perf2k2\direct\api\methods\BidModifiersSet;
use perf2k2\direct\api\methods\BidModifiersToggle;

class BidModifiers
{
    public static function add(): BidModifiersAdd
    {
        return (new BidModifiersService())->getAddMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new BidModifiersService())->getDeleteMethod();
    }

    public static function get(): BidModifiersGet
    {
        return (new BidModifiersService())->getGetMethod();
    }

    public static function set(): BidModifiersSet
    {
        return (new BidModifiersService())->getSetMethod();
    }

    public static function toggle(): BidModifiersToggle
    {
        return (new BidModifiersService())->getToggleMethod();
    }
}