<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\DictionariesGet;

class DictionariesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'dictionaries';
    }
    
    public function getGetMethod(): DictionariesGet
    {
        return new DictionariesGet($this);
    }
}