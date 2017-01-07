<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
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

    public function testArchive()
    {
        $response = Ads::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $criteria = (new AdsSelectionCriteria())
            ->setCampaignIds([1000]);

        $method = Ads::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setTextAdFieldNames([
                TextAdFieldEnum::VCardId,
                TextAdFieldEnum::Href,
                TextAdFieldEnum::SitelinkSetId,
            ]);

        $methodData = $method->getMethodData();

        $this->assertEquals([
            'Ids' =>  [],
            'States' => [],
            'Statuses' => [],
            'CampaignIds' => [1000],
            'AdGroupIds' => [],
            'Types' => [],
            'Mobile' => 'NO',
            'VCardIds' => [],
            'SitelinkSetIds' => [],
            'AdImageHashes' => [],
            'VCardModerationStatuses' => [],
            'SitelinksModerationStatuses' => [],
            'AdImageModerationStatuses' => [],
            'AdExtensionIds' => [],
        ], $criteria->jsonSerialize());

        $this->assertEquals([
            'SelectionCriteria' =>  $criteria,
            'FieldNames' => ['Id', 'State'],
            'TextAdFieldNames' => ['VCardId', 'Href', "SitelinkSetId"],
            'MobileAppAdFieldNames' => [],
            'DynamicTextAdFieldNames' => [],
            'Page' => new LimitOffset(),
        ], $methodData);

        $response = $method->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSuspend()
    {
        $response = Ads::suspend()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUnarchive()
    {
        $response = Ads::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testUpdate()
    {
        $response = Ads::update()
            ->setAds([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}