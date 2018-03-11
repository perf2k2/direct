<?php

namespace direct;

use direct\api\methods\KeywordsResearchHasSearchVolume;
use direct\api\services\KeywordsResearchService;

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