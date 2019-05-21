<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\KeywordsResearchDeduplicate;
use perf2k2\direct\api\methods\KeywordsResearchHasSearchVolume;
use perf2k2\direct\api\services\KeywordsResearchService;

class KeywordsResearch
{
    public static function hasSearchVolume(): KeywordsResearchHasSearchVolume
    {
        return (new KeywordsResearchService())->hasSearchVolume();
    }

    public static function deduplicate(): KeywordsResearchDeduplicate
    {
        return (new KeywordsResearchService())->deduplicate();
    }
}