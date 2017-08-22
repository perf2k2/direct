<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\audiencetargets\AudienceTargetsSelectionCriteria;
use perf2k2\direct\api\enums\audiencetargets\AudienceTargetFieldEnum;
use perf2k2\direct\api\enums\audiencetargets\AudienceTargetStateEnum;
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