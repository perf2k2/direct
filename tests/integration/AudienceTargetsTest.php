<?php

namespace perf2k2\direct\tests\integration;

use api\entities\audiencetargets\AudienceTargetAddItem;
use perf2k2\direct\api\entities\audiencetargets\AudienceTargetsSelectionCriteria;
use perf2k2\direct\api\enums\audiencetargets\AudienceTargetFieldEnum;
use perf2k2\direct\api\enums\audiencetargets\AudienceTargetStateEnum;
use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\AudienceTargets;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

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
                ->setStates([AudienceTargetStateEnum::SUSPENDED])
            )
            ->setFieldNames([
                AudienceTargetFieldEnum::Id,
                AudienceTargetFieldEnum::AdGroupId,
                AudienceTargetFieldEnum::CampaignId
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}