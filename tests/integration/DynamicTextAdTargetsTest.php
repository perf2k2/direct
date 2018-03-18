<?php

namespace direct\tests\integration;

use direct\api\entities\dynamictextadtargets\SetBidsItem;
use direct\api\entities\dynamictextadtargets\WebpageAddItem;
use direct\api\entities\dynamictextadtargets\WebpageCondition;
use direct\api\entities\dynamictextadtargets\WebpagesSelectionCriteria;
use direct\api\enums\dynamictextadtargets\WebpageStateSelectionEnum;
use direct\api\entities\IdsCriteria;
use direct\api\entities\LimitOffset;
use direct\api\enums\PriorityEnum;
use direct\DynamicTextAdTargets;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class DynamicTextAdTargetsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }
    
    public function testAdd()
    {
        $response = DynamicTextAdTargets::add()
            ->setWebpages([
                (new WebpageAddItem('name', 1))
                    ->setBid(1)
                    ->setConditions([new WebpageCondition('operator', 'operand', ['argument'])])
                    ->setContextBid(2)
                    ->setStrategyPriority(PriorityEnum::LOW)
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testGet()
    {
        $response = DynamicTextAdTargets::get()
            ->setSelectionCriteria(
                (new WebpagesSelectionCriteria())
                    ->setIds([1])
                    ->setStates([WebpageStateSelectionEnum::ON()])
                    ->setAdGroupIds([2])
                    ->setCampaignIds([3])
            )
            ->setFieldNames(['field1', 'field2'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE))
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testDelete()
    {
        $response = DynamicTextAdTargets::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testResume()
    {
        $response = DynamicTextAdTargets::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testSuspend()
    {
        $response = DynamicTextAdTargets::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testBidsSet()
    {
        $response = DynamicTextAdTargets::setBids()
            ->setBids([
                (new SetBidsItem())
                    ->setId(1)
                    ->setAdGroupId(2)
                    ->setContextBid(3)
                    ->setCampaignId(4)
                    ->setStrategyPriority(PriorityEnum::HIGH)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
