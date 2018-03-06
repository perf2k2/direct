<?php

namespace api\services;

use api\AbstractService;
use api\methods\KeywordsResearchHasSearchVolume;

class KeywordsResearchService extends AbstractService
{
    public function getApiName(): string
    {
        return 'keywordsresearch';
    }
    
    public function hasSearchVolume(): KeywordsResearchHasSearchVolume
    {
        return new KeywordsResearchHasSearchVolume($this);
    }
}