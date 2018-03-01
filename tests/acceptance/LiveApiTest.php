<?php

namespace acceptance;

use api\entities\adgroups\AdGroupAddItem;
use api\entities\campaigns\CampaignAddItem;
use api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use api\entities\campaigns\textcampaign\TextCampaignAddItem;
use api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use perf2k2\direct\AdGroups;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\Campaigns;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Response;

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
    public function testDeleteGroup(int $adGroupId)
    {
        $response = AdGroups::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())->setIds([$adGroupId])
            )
            ->createAndSendRequest(new Connection(new ConfigFileCredential(__DIR__ . '/../../'), 'ru', true));
        
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals($adGroupId, $response->getResult('DeleteResults')[0]->Id);
    }
    
    /**
     * @depends testAddCampaign
     */
    public function testDeleteCampaign(int $campaignId)
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