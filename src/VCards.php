<?php

namespace perf2k2\direct;

use api\services\VCardsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\VCardsAdd;
use perf2k2\direct\api\methods\VCardsGet;

class VCards
{
    public static function add(): VCardsAdd
    {
        return (new VCardsService())->add();
    }
    
    public static function get(): VCardsGet
    {
        return (new VCardsService())->get();
    }
    
    public static function delete(): DeleteMethod
    {
        return (new VCardsService())->delete();
    }
}