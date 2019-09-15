<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\leads\LeadsSelectionCriteria;
use perf2k2\direct\api\enums\leads\LeadFieldEnum;
use perf2k2\direct\transport\Response;

class LeadsTest extends BaseTestCase {

    public function testGet()
    {
        $method = self::$client->getLeadsService()
            ->getGetMethod()
            ->setSelectionCriteria(
                (new LeadsSelectionCriteria([1, 2, 3]))
                    ->setDateTimeFrom(new \DateTimeImmutable())
                    ->setDateTimeTo(new \DateTimeImmutable())
            )
            ->setFieldNames([
                LeadFieldEnum::Id(),
                LeadFieldEnum::SubmittedAt(),
                LeadFieldEnum::TurboPageId(),
                LeadFieldEnum::TurboPageName(),
                LeadFieldEnum::Data(),
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}