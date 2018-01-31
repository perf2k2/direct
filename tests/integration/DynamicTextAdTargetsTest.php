<?php

namespace perf2k2\direct\tests\integration;

use api\entities\dynamictextadtargets\WebpageAddItem;
use api\entities\dynamictextadtargets\WebpageCondition;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\DynamicTextAdTargets;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

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
}
