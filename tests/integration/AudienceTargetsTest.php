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
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class AudienceTargetsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = AudienceTargets::add()
            ->setAudienceTargets([
                (new AudienceTargetAddItem())
                    ->setAdGroupId(1)
                    ->setRetargetingListId(1)
                    ->setStrategyPriority(PriorityEnum::NORMAL)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = AudienceTargets::get()
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
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = AudienceTargets::delete()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testResume()
    {
        $response = AudienceTargets::resume()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSuspend()
    {
        $response = AudienceTargets::suspend()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1]))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSetBids()
    {
        $response = AudienceTargets::setBids()
            ->setBids([
                (new AudienceTargetSetBidsItem())
                ->setId(1)
                ->setStrategyPriority(PriorityEnum::HIGH)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}