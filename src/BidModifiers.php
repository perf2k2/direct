<?php

namespace direct;

use direct\api\services\BidModifiersService;
use direct\api\DeleteMethod;
use direct\api\methods\BidModifiersAdd;
use direct\api\methods\BidModifiersGet;
use direct\api\methods\BidModifiersSet;
use direct\api\methods\BidModifiersToggle;

class BidModifiers
{
    public static function add(): BidModifiersAdd
    {
        return (new BidModifiersService())->add();
    }

    public static function delete(): DeleteMethod
    {
        return (new BidModifiersService())->delete();
    }

    public static function get(): BidModifiersGet
    {
        return (new BidModifiersService())->get();
    }

    public static function set(): BidModifiersSet
    {
        return (new BidModifiersService())->set();
    }

    public static function toggle(): BidModifiersToggle
    {
        return (new BidModifiersService())->toggle();
    }
}