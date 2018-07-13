<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\KeywordsResearchHasSearchVolume;
use perf2k2\direct\api\services\KeywordsResearchService;

class KeywordsResearch
{
    public function getApiName(): string
    {
        return 'keywordsresearch';
    }

    public static function hasSearchVolume(): KeywordsResearchHasSearchVolume
    {
        return (new KeywordsResearchService())->hasSearchVolume();
    }
}