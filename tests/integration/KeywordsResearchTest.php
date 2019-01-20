<?php

namespace perf2k2\direct\tests\integration;

use api\entities\keywordsresearch\DeduplicateRequestItem;
use perf2k2\direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use perf2k2\direct\api\enums\keywordsresearch\DeduplicateOperationEnum;
use perf2k2\direct\api\enums\keywordsresearch\HasSearchVolumeFieldEnum;
use perf2k2\direct\transport\Response;
use perf2k2\direct\KeywordsResearch;

class KeywordsResearchTest extends BaseTestCase {
    
    public function testHasSearchVolume()
    {
        $method = KeywordsResearch::hasSearchVolume()
            ->setSelectionCriteria(
                new HasSearchVolumeSelectionCriteria(['keyword'], [1])
            )
            ->setFieldNames([
                HasSearchVolumeFieldEnum::Desktops(),
                HasSearchVolumeFieldEnum::AllDevices(),
                HasSearchVolumeFieldEnum::Tablets(),
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDeduplicate()
    {
        $method = KeywordsResearch::deduplicate()
            ->setKeywords([new DeduplicateRequestItem('')])
            ->setOperation([
                DeduplicateOperationEnum::ELIMINATE_OVERLAPPING(),
                DeduplicateOperationEnum::MERGE_DUPLICATES(),
            ]);

        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}