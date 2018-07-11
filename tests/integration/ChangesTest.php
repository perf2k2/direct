<?php

namespace direct\tests\integration;

use direct\api\enums\changes\FieldNamesEnum;
use direct\Changes;
use direct\transport\Response;

class ChangesTest extends BaseTestCase {
    
    public function testCheck()
    {
        $method = Changes::check()
            ->setCampaignIds([1])
            ->setAdGroupIds([2])
            ->setAdIds([3])
            ->setFieldNames([FieldNamesEnum::AdGroupIds(), FieldNamesEnum::CampaignIds()])
            ->setTimestamp(\DateTime::ATOM);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testCheckCampaigns()
    {
        $method = Changes::checkCampaigns()
            ->setTimestamp(\DateTime::ATOM);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testCheckDictionaries()
    {
        $method = Changes::checkDictionaries()
            ->setTimestamp(\DateTime::ATOM);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
