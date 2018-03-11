<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\KeywordsResearchHasSearchVolume;

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