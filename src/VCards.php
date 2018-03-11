<?php

namespace direct;

use direct\api\services\VCardsService;
use direct\api\DeleteMethod;
use direct\api\methods\VCardsAdd;
use direct\api\methods\VCardsGet;

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