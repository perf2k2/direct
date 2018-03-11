<?php

namespace direct\tests\integration;

use direct\api\entities\ads\AdAddItem;
use direct\api\entities\ads\MobileAppAdAdd;
use direct\api\entities\ads\TextAdAdd;
use direct\api\enums\ad\MobAppAgeLabelEnum;
use direct\api\enums\ad\MobileAppAdActionEnum;
use direct\api\entities\ads\AdsSelectionCriteria;
use direct\api\entities\IdsCriteria;
use direct\api\entities\LimitOffset;
use direct\api\enums\ad\AdFieldEnum;
use direct\api\enums\ad\TextAdFieldEnum;
use direct\api\enums\YesNoEnum;
use direct\http\Response;
use direct\Ads;
use direct\tests\stubs\FakeConnection;

class AdsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }
    
    public function testAdd()
    {
        $response = Ads::add()
            ->setAds([
                (new AdAddItem(1))
                    ->setTextAd(
                        (new TextAdAdd('Text', 'Title', YesNoEnum::YES()))
                            ->setHref('href')
                            ->setDisplayUrlPath('path')
                            ->setTitle2('title2')
                            ->setVCardId(1)
                    )
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    
        $response = Ads::add()
            ->setAds([
                (new AdAddItem(1))
                    ->setMobileAppAd(
                        (new MobileAppAdAdd('Text', 'Title', MobileAppAdActionEnum::DOWNLOAD()))
                            ->setAdImageHash('hash')
                            ->setAgeLabel(MobAppAgeLabelEnum::AGE_6())
                            ->setTrackingUrl('url')
                    )
            ])
            ->createAndSendRequest(self::$connection);
    
        $this->assertInstanceOf(Response::class, $response);
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

    public function testDelete()
    {
        $response = Ads::delete()
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
            'CampaignIds' => [1000],
            'Mobile' => 'NO',
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

    public function testModerate()
    {
        $response = Ads::moderate()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testResume()
    {
        $response = Ads::resume()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

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