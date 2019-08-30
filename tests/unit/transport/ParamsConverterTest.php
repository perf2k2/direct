<?php

namespace perf2k2\direct\tests\unit\transport;

use perf2k2\direct\api\entities\campaigns\CampaignAddItem;
use perf2k2\direct\api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use perf2k2\direct\transport\ParamsConverter;
use PHPUnit\Framework\TestCase;

class ParamsConverterTest extends TestCase
{

    public function testToArray()
    {
        $data = [
            'Campaigns' => [
                (new CampaignAddItem('Test Campaign', '2019-01-01'))
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
            ],
            'serviceName' => 'campaigns',
            'apiName' => NULL,
        ];

        $converter = new ParamsConverter($data);
        $result = $converter->toArray();

        $this->assertSame('Test Campaign', $result['Campaigns'][0]['Name']);
        $this->assertSame('2019-01-01', $result['Campaigns'][0]['StartDate']);

        $this->assertFalse(array_key_exists('serviceName', $result));
        $this->assertFalse(array_key_exists('apiName', $result));
        $this->assertFalse(array_key_exists('DailyBudget', $result['Campaigns'][0]));

        $this->assertSame('AVERAGE_CPC', $result['Campaigns'][0]['TextCampaign']['BiddingStrategy']['Search']['BiddingStrategyType']);
        $this->assertSame(5000000, $result['Campaigns'][0]['TextCampaign']['BiddingStrategy']['Search']['AverageCpc']['AverageCpc']);

        $this->assertSame('NETWORK_DEFAULT', $result['Campaigns'][0]['TextCampaign']['BiddingStrategy']['Network']['BiddingStrategyType']);
        $this->assertSame(50, $result['Campaigns'][0]['TextCampaign']['BiddingStrategy']['Network']['NetworkDefault']['LimitPercent']);
    }
}
