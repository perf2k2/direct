<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\turbopages\TurboPageFieldEnum;
use perf2k2\direct\transport\Response;

class TurboPagesTest extends BaseTestCase {

    public function testGet()
    {
        $method = self::$client->getTurboPagesService()
            ->getGetMethod()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([1, 2, 3])
            )
            ->setFieldNames([TurboPageFieldEnum::Id(), TurboPageFieldEnum::Name()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}