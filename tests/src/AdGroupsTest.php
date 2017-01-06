<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\AdGroups;
use perf2k2\direct\api\entities\adgroups\AdGroupsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\adgroups\AdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextFeedAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\MobileAppAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\AdGroupStatusSelectionEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class AdGroupsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = AdGroups::add()
            ->setAdGroups([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = AdGroups::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = AdGroups::get()
            ->setSelectionCriteria((new AdGroupsSelectionCriteria())
                ->setIds([])
                ->setStatuses([AdGroupStatusSelectionEnum::ACCEPTED])
            )
            ->setFieldNames([
                AdGroupFieldEnum::Id,
                AdGroupFieldEnum::Name,
                AdGroupFieldEnum::Status
            ])
            ->setMobileAppAdGroupFieldNames([
                MobileAppAdGroupFieldEnum::AppIconModeration
            ])
            ->setDynamicTextFeedAdGroupFieldNames([
                DynamicTextFeedAdGroupFieldEnum::SourceType
            ])
            ->setDynamicTextAdGroupFieldNames([
                DynamicTextAdGroupFieldEnum::DomainUrl
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUpdate()
    {
        $response = AdGroups::update()
            ->setAdGroups([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
