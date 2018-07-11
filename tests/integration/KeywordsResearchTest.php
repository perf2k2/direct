<?php

namespace direct\tests\integration;

use direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use direct\api\enums\keywordsresearch\HasSearchVolumeFieldEnum;
use direct\transport\Response;
use direct\KeywordsResearch;

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