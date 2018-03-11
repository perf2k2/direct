<?php

namespace direct\api\methods;

use direct\api\GetMethod;

class DictionariesGet extends GetMethod
{
    protected $DictionaryNames = [];
    
    public function setDictionaryNames(array $DictionaryNames)
    {
        $this->DictionaryNames = $DictionaryNames;
        return $this;
    }
}