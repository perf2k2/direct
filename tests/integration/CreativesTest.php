<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\creatives\CreativesSelectionCriteria;
use perf2k2\direct\api\enums\creatives\AdFieldEnum;
use perf2k2\direct\api\enums\creatives\CpcVideoCreativeFieldEnum;
use perf2k2\direct\api\enums\creatives\CpmVideoCreativeFieldEnum;
use perf2k2\direct\api\enums\creatives\CreativeTypeEnum;
use perf2k2\direct\api\enums\creatives\VideoExtensionCreativeFieldEnum;
use perf2k2\direct\transport\Response;

class CreativesTest extends BaseTestCase {

    public function testGet()
    {
        $method = self::$client->getCreativesService()
            ->getGetMethod()
            ->setSelectionCriteria(
                (new CreativesSelectionCriteria())
                    ->setIds([1])
                    ->setTypes([CreativeTypeEnum::HTML5_CREATIVE(), CreativeTypeEnum::IMAGE_CREATIVE()])
            )
            ->setFieldNames([AdFieldEnum::Id(), AdFieldEnum::Name()])
            ->setCpcVideoCreativeFieldNames([CpcVideoCreativeFieldEnum::Duration()])
            ->setCpmVideoCreativeFieldNames([CpmVideoCreativeFieldEnum::Duration()])
            ->setVideoExtensionCreativeFieldNames([VideoExtensionCreativeFieldEnum::Duration()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}