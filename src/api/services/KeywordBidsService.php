<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\KeywordBidsGet;
use perf2k2\direct\api\methods\KeywordBidsSet;
use perf2k2\direct\api\methods\KeywordBidsSetAuto;

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

    public function set(): KeywordBidsSet
    {
        return new KeywordBidsSet($this);
    }

    public function setAuto(): KeywordBidsSetAuto
    {
        return new KeywordBidsSetAuto($this);
    }
}