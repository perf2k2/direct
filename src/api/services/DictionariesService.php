<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\methods\DictionariesGet;

class DictionariesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'dictionaries';
    }
    
    public function get(): DictionariesGet
    {
        return new DictionariesGet($this);
    }
}