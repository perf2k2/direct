<?php

namespace direct\tests\integration;

use direct\api\entities\audiencetargets\AudienceTargetAddItem;
use direct\api\entities\audiencetargets\AudienceTargetSetBidsItem;
use direct\api\entities\audiencetargets\AudienceTargetsSelectionCriteria;
use direct\api\entities\IdsCriteria;
use direct\api\enums\audiencetargets\AudienceTargetFieldEnum;
use direct\api\enums\audiencetargets\AudienceTargetStateEnum;
use direct\api\enums\PriorityEnum;
use direct\AudienceTargets;
use direct\transport\Response;

class AudienceTargetsTest extends BaseTestCase {

    public function testAdd()
    {
        $method = AudienceTargets::add()
            ->setAudienceTargets([
                (new AudienceTargetAddItem())
                    ->setAdGroupId(1)
                    ->setRetargetingListId(1)
                    ->setStrategyPriority(PriorityEnum::NORMAL)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = AudienceTargets::get()
            ->setSelectionCriteria((new AudienceTargetsSelectionCriteria())
                ->setIds([1])
                ->setAdGroupIds([2])
                ->setCampaignIds([3])
                ->setInterestIds([4])
                ->setRetargetingListIds([5])
                ->setStates([AudienceTargetStateEnum::SUSPENDED()])
            )
            ->setFieldNames([
                AudienceTargetFieldEnum::Id(),
                AudienceTargetFieldEnum::AdGroupId(),
                AudienceTargetFieldEnum::CampaignId()
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = AudienceTargets::delete()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testResume()
    {
        $method = AudienceTargets::resume()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSuspend()
    {
        $method = AudienceTargets::suspend()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSetBids()
    {
        $method = AudienceTargets::setBids()
            ->setBids([
                (new AudienceTargetSetBidsItem())
                ->setId(1)
                ->setStrategyPriority(PriorityEnum::HIGH)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}