<?php

namespace direct\tests\integration;

use direct\api\entities\ads\AdAddItem;
use direct\api\entities\ads\MobileAppAdAdd;
use direct\api\entities\ads\TextAdAdd;
use direct\api\enums\ad\AdTypeEnum;
use direct\api\enums\ad\MobAppAgeLabelEnum;
use direct\api\enums\ad\MobileAppAdActionEnum;
use direct\api\entities\ads\AdsSelectionCriteria;
use direct\api\entities\IdsCriteria;
use direct\api\enums\ad\AdFieldEnum;
use direct\api\enums\ad\TextAdFieldEnum;
use direct\api\enums\YesNoEnum;
use direct\transport\Response;
use direct\Ads;

class AdsTest extends BaseTestCase {

    public function testAdd()
    {
        $method = Ads::add()
            ->setAds([
                (new AdAddItem(1))
                    ->setTextAd(
                        (new TextAdAdd('Text', 'Title', YesNoEnum::YES()))
                            ->setHref('href')
                            ->setDisplayUrlPath('path')
                            ->setTitle2('title2')
                            ->setVCardId(1)
                    )
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    
        $method = Ads::add()
            ->setAds([
                (new AdAddItem(1))
                    ->setMobileAppAd(
                        (new MobileAppAdAdd('Text', 'Title', MobileAppAdActionEnum::DOWNLOAD()))
                            ->setAdImageHash('hash')
                            ->setAgeLabel(MobAppAgeLabelEnum::AGE_6())
                            ->setTrackingUrl('url')
                    )
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testArchive()
    {
        $method = Ads::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = Ads::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $criteria = (new AdsSelectionCriteria())
            ->setCampaignIds([1000])
            ->setTypes([AdTypeEnum::TEXT_AD()]);

        $method = Ads::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setTextAdFieldNames([
                TextAdFieldEnum::VCardId,
                TextAdFieldEnum::Href,
                TextAdFieldEnum::SitelinkSetId,
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testModerate()
    {
        $method = Ads::moderate()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testResume()
    {
        $method = Ads::resume()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSuspend()
    {
        $method = Ads::suspend()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUnarchive()
    {
        $method = Ads::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUpdate()
    {
        $method = Ads::update()
            ->setAds([]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}