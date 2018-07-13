<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\GetMethod;

class DictionariesGet extends GetMethod
{
    protected $DictionaryNames = [];
    
    public function setDictionaryNames(array $DictionaryNames)
    {
        $this->DictionaryNames = $DictionaryNames;
        return $this;
    }
}