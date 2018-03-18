<?php

namespace direct\tests\integration;

use direct\api\enums\changes\FieldNamesEnum;
use direct\Changes;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

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
            ->setFieldNames([FieldNamesEnum::AdGroupIds(), FieldNamesEnum::CampaignIds()])
            ->setTimestamp(\DateTime::ISO8601)
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCheckCampaigns()
    {
        $response = Changes::checkCampaigns()
            ->setTimestamp(\DateTime::ISO8601)
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCheckDictionaries()
    {
        $response = Changes::checkDictionaries()
            ->setTimestamp(\DateTime::ISO8601)
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
