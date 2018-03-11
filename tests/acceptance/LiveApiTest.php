<?php

namespace acceptance;

use direct\api\entities\adgroups\AdGroupAddItem;
use direct\api\entities\ads\AdAddItem;
use direct\api\entities\ads\TextAdAdd;
use direct\api\entities\campaigns\CampaignAddItem;
use direct\api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use direct\api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use direct\AdGroups;
use direct\Ads;
use direct\api\entities\ads\AdsSelectionCriteria;
use direct\api\entities\IdsCriteria;
use direct\api\enums\ad\AdFieldEnum;
use direct\api\enums\YesNoEnum;
use direct\Campaigns;
use direct\credentials\ConfigFileCredential;
use direct\http\Connection;
use direct\http\Response;

class LiveApiTest extends \PHPUnit_Framework_TestCase
{
    public function testAddCampaign()
    {
        $response = Campaigns::add()
            ->setCampaigns([
                (new CampaignAddItem('Test Campaign', date('Y-m-d')))
                    ->setTextCampaign(
                        new TextCampaignAddItem(
                            new TextCampaignStrategyAdd(
                                (new TextCampaignSearchStrategyAdd(TextCampaignSearchStrategyTypeEnum::AVERAGE_CPC()))
                                    ->setAverageCpc(new StrategyAverageCpcAdd(5000000)),
                                (new TextCampaignNetworkStrategyAdd(TextCampaignNetworkStrategyTypeEnum::NETWORK_DEFAULT()))
                                    ->setNetworkDefault((new StrategyNetworkDefaultAdd())->setLimitPercent(50))
                            )
                        )
                    )
            ])
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $campaignId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertTrue(is_numeric($campaignId));
        
        return $campaignId;
    }
    
    /**
     * @depends testAddCampaign
     */
    public function testAddGroup(int $campaignId)
    {
        $response = AdGroups::add()
            ->setAdGroups([
                new AdGroupAddItem('Test group', $campaignId, [1])
            ])
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $adGroupId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertTrue(is_numeric($adGroupId));
        
        return $adGroupId;
    }

    /**
     * @depends testAddGroup
     */
    public function testAddAd(int $adGroupId)
    {
        $response = Ads::add()
            ->setAds([
                (new AdAddItem($adGroupId))
                    ->setTextAd(
                        (new TextAdAdd('text', 'title', YesNoEnum::NO()))
                            ->setHref('http://link.ru')
                    )
            ])
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $adId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertTrue(is_numeric($adId));
        
        return [
            'adGroupId' => $adGroupId,
            'adId' => $adId,
        ];
    }
    
    /**
     * @depends testAddAd
     */
    public function testModerateAd(array $data)
    {
        $adId = $data['adId'];
        
        $response = Ads::moderate()
            ->setSelectionCriteria((new IdsCriteria())->setIds([$adId]))
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $response->getResult('ModerateResults')[0]->Errors[0]->Code);
    }
    
    /**
     * @depends testAddAd
     */
    public function testArchiveAd(array $data)
    {
        $adGroupId = $data['adGroupId'];
        $adId = $data['adId'];
        
        $response = Ads::archive()
            ->setSelectionCriteria((new IdsCriteria())->setIds([$adId]))
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $response->getResult('ArchiveResults')[0]->Errors[0]->Code);
        
        return $adGroupId;
    }
    
    /**
     * @depends testArchiveAd
     */
    public function testGetAds(int $adGroupId)
    {
        $response = Ads::get()
            ->setSelectionCriteria(
                (new AdsSelectionCriteria())->setAdGroupIds([$adGroupId])
            )
            ->setFieldNames([AdFieldEnum::Id()])
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));

        $this->assertInstanceOf(Response::class, $response);
        $this->assertTrue(is_numeric($response->getResult('Ads')[0]->Id));
    }
    
    /**
     * @depends testArchiveAd
     */
    public function testArchiveGroup(int $adGroupId)
    {
        $response = AdGroups::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())->setIds([$adGroupId])
            )
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8301, $response->getResult('DeleteResults')[0]->Errors[0]->Code);
    }
    
    /**
     * @depends testAddCampaign
     */
    public function testArchiveCampaign(int $campaignId)
    {
        $response = Campaigns::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())->setIds([$campaignId])
            )
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals($campaignId, $response->getResult('DeleteResults')[0]->Id);
    }
}