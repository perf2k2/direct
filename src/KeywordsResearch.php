<?php

namespace perf2k2\direct;

use api\methods\KeywordsResearchHasSearchVolume;

class KeywordsResearch
{
    public function getApiName(): string
    {
        return 'keywordsresearch';
    }

    public static function hasSearchVolume(): KeywordsResearchHasSearchVolume
    {
        return new KeywordsResearchHasSearchVolume(self::getApiName());
    }
}