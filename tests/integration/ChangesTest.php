<?php

namespace perf2k2\direct\tests\integration;

use api\enums\changes\FieldNamesEnum;
use perf2k2\direct\Changes;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class ChangesTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testCheck()
    {
        $response = Changes::check()
            ->setCampaignIds([1])
            ->setAdGroupIds([2])
            ->setAdIds([3])
            ->setFieldNames([FieldNamesEnum::AdGroupIds, FieldNamesEnum::CampaignIds])
            ->setTimestamp(\DateTime::ISO8601)
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
