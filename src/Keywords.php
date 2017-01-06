<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Keywords extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'keywords';
    }
    public static function get(): KeywordsGet
    {
        return new KeywordsGet((new self())->getApiName());
    }
}