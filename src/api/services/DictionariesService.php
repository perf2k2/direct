<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\DictionariesGet;

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