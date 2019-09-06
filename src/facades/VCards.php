<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\VCardsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\VCardsAdd;
use perf2k2\direct\api\methods\VCardsGet;

class VCards
{
    public static function add(): VCardsAdd
    {
        return (new VCardsService())->getAddMethod();
    }
    
    public static function get(): VCardsGet
    {
        return (new VCardsService())->getGetMethod();
    }
    
    public static function delete(): DeleteMethod
    {
        return (new VCardsService())->getDeleteMethod();
    }
}