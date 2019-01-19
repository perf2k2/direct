<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\KeywordBidsGet;

class KeywordBidsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'keywordbids';
    }
    
    public function get(): KeywordBidsGet
    {
        return new KeywordBidsGet($this);
    }
}