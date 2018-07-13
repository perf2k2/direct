<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use perf2k2\direct\api\enums\keywordsresearch\HasSearchVolumeFieldEnum;
use perf2k2\direct\transport\Response;
use perf2k2\direct\KeywordsResearch;

class KeywordsResearchTest extends BaseTestCase {
    
    public function testGet()
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
}