<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\VCardsGet;

class VCards
{
    public static function getApiName(): string
    {
        return 'vcards';
    }

    public static function get(): VCardsGet
    {
        return new VCardsGet(self::getApiName());
    }
}