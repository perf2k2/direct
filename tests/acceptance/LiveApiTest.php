<?php

namespace acceptance;

use api\entities\campaigns\CampaignAddItem;
use api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use api\entities\campaigns\textcampaign\TextCampaignAddItem;
use api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
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
        
        $this->assertInstanceOf(Response::class, $response);
        $this->assertTrue(is_numeric($response->getResult('AddResults')[0]->Id));
    }
}