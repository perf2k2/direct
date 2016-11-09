<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\ad\TextAdFieldEnum;
use perf2k2\direct\http\Connection;

class AdsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    const DEFAULT_AD = 1567104;

    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../', true);
    }

    public function setUp()
    {
        Campaigns::unarchive()
            ->setSelectionCriteria((new IdsCriteria())->setIds([CampaignsTest::DEFAULT_CAMPAIGN]))
            ->sendRequest(self::$connection);
    }

    public function testGet()
    {
        $response = Ads::get()
            ->setSelectionCriteria(
                (new AdsSelectionCriteria())
                    ->setCampaignIds([CampaignsTest::DEFAULT_CAMPAIGN])
            )
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setTextAdFieldNames([
                TextAdFieldEnum::VCardId,
                TextAdFieldEnum::Href,
                TextAdFieldEnum::SitelinkSetId,
            ])
            ->sendRequest(self::$connection);
        
        $ads = $response->getResult('Ads');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }

    public function testUpdate()
    {
        $response = Ads::update()
            ->setAds([
                [
                    'Id' => self::DEFAULT_AD,
                    'TextAd' => [
                        'Title' => 'Тест пройден!',
                    ],
                ]
            ])->sendRequest(self::$connection);

        $ads = $response->getResult('UpdateResults');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }

    public function testSuspend()
    {
        $response = Ads::suspend()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_AD])
            )
            ->sendRequest(self::$connection);

        $ads = $response->getResult('SuspendResults');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }

    public function testArchive()
    {
        $response = Ads::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_AD])
            )
            ->sendRequest(self::$connection);

        $ads = $response->getResult('ArchiveResults');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }

    public function testUnarchive()
    {
        $response = Ads::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_AD])
            )
            ->sendRequest(self::$connection);

        $ads = $response->getResult('UnarchiveResults');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }

    public function tearDown()
    {
        Campaigns::archive()
            ->setSelectionCriteria((new IdsCriteria())->setIds([CampaignsTest::DEFAULT_CAMPAIGN]))
            ->sendRequest(self::$connection);
    }
}