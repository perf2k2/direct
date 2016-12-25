<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\ad\TextAdFieldEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\Ads;
use perf2k2\direct\tests\stubs\FakeConnection;

class AdsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Ads::get()
            ->setSelectionCriteria(
                (new AdsSelectionCriteria())
                    ->setCampaignIds([])
            )
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setTextAdFieldNames([
                TextAdFieldEnum::VCardId,
                TextAdFieldEnum::Href,
                TextAdFieldEnum::SitelinkSetId,
            ])
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUpdate()
    {
        $response = Ads::update()
            ->setAds([])
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSuspend()
    {
        $response = Ads::suspend()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testArchive()
    {
        $response = Ads::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUnarchive()
    {
        $response = Ads::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}