<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\KeywordsResearchHasSearchVolume;

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