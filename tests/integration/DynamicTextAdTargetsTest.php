<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\dynamictextadtargets\SetBidsItem;
use perf2k2\direct\api\entities\dynamictextadtargets\WebpageAddItem;
use perf2k2\direct\api\entities\dynamictextadtargets\WebpageCondition;
use perf2k2\direct\api\entities\dynamictextadtargets\WebpagesSelectionCriteria;
use perf2k2\direct\api\enums\dynamictextadtargets\WebpageStateSelectionEnum;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\DynamicTextAdTargets;
use perf2k2\direct\transport\Response;

class DynamicTextAdTargetsTest extends BaseTestCase {
    
    public function testAdd()
    {
        $method = DynamicTextAdTargets::add()
            ->setWebpages([
                (new WebpageAddItem('name', 1))
                    ->setBid(1)
                    ->setConditions([new WebpageCondition('operator', 'operand', ['argument'])])
                    ->setContextBid(2)
                    ->setStrategyPriority(PriorityEnum::LOW)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testGet()
    {
        $method = DynamicTextAdTargets::get()
            ->setSelectionCriteria(
                (new WebpagesSelectionCriteria())
                    ->setIds([1])
                    ->setStates([WebpageStateSelectionEnum::ON()])
                    ->setAdGroupIds([2])
                    ->setCampaignIds([3])
            )
            ->setFieldNames(['field1', 'field2'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testDelete()
    {
        $method = DynamicTextAdTargets::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testResume()
    {
        $method = DynamicTextAdTargets::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testSuspend()
    {
        $method = DynamicTextAdTargets::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testBidsSet()
    {
        $method = DynamicTextAdTargets::setBids()
            ->setBids([
                (new SetBidsItem())
                    ->setId(1)
                    ->setAdGroupId(2)
                    ->setContextBid(3)
                    ->setCampaignId(4)
                    ->setStrategyPriority(PriorityEnum::HIGH)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
