<?php

namespace acceptance;

use direct\api\entities\adgroups\AdGroupAddItem;
use direct\api\entities\ads\AdAddItem;
use direct\api\entities\ads\TextAdAdd;
use direct\api\entities\campaigns\CampaignAddItem;
use direct\api\entities\campaigns\CampaignsSelectionCriteria;
use direct\api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use direct\api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use direct\api\entities\LimitOffset;
use direct\api\enums\campaign\CampaignFieldEnum;
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
use direct\transport\Client;
use direct\transport\Connection;
use direct\transport\Response;

class LiveApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected static $client;
    /**
     * @var Connection
     */
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$client = new Client(new ConfigFileCredential());
        self::$connection = new Connection(true);
    }

    protected function createAndSendRequest($method)
    {
        return static::$connection->send(static::$client->createRequest($method));
    }

    public function testAddCampaign()
    {
        $method = Campaigns::add()
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
            ]);

        $response = $this->createAndSendRequest($method);
        $campaignId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $campaignId);

        return $campaignId;
    }

    public function testGetAllCampaigns()
    {
        $method = Campaigns::get()
            ->setSelectionCriteria(new CampaignsSelectionCriteria())
            ->setFieldNames([CampaignFieldEnum::Id(), CampaignFieldEnum::Name()])
            ->setPage(new LimitOffset(5));

        $response = $this->createAndSendRequest($method);
        $campaignId = $response->getResult('Campaigns')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $campaignId);

        return $campaignId;
    }

    /**
     * @depends testAddCampaign
     * @param int $campaignId
     * @return int
     * @throws \direct\exceptions\WrapperException
     */
    public function testAddGroup(int $campaignId): int
    {
        $method = AdGroups::add()
            ->setAdGroups([
                new AdGroupAddItem('Test group', $campaignId, [1])
            ]);

        $response = $this->createAndSendRequest($method);
        $adGroupId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $adGroupId);

        return $adGroupId;
    }

    /**
     * @depends testAddGroup
     * @param int $adGroupId
     * @return array
     * @throws \direct\exceptions\WrapperException
     */
    public function testAddAd(int $adGroupId): array
    {
        $method = Ads::add()
            ->setAds([
                (new AdAddItem($adGroupId))
                    ->setTextAd(
                        (new TextAdAdd('text', 'title', YesNoEnum::NO()))
                            ->setHref('http://link.ru')
                    )
            ]);

        $response = $this->createAndSendRequest($method);
        $adId = $response->getResult('AddResults')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $adId);

        return [
            'adGroupId' => $adGroupId,
            'adId' => $adId,
        ];
    }

    /**
     * @depends testAddAd
     * @param array $data
     * @throws \direct\exceptions\WrapperException
     */
    public function testModerateAd(array $data)
    {
        $adId = $data['adId'];

        $method = Ads::moderate()
            ->setSelectionCriteria((new IdsCriteria())->setIds([$adId]));

        $response = $this->createAndSendRequest($method);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $response->getResult('ModerateResults')[0]->Errors[0]->Code);
    }

    /**
     * @depends testAddAd
     * @param array $data
     * @return mixed
     * @throws \direct\exceptions\WrapperException
     */
    public function testArchiveAd(array $data)
    {
        $adGroupId = $data['adGroupId'];
        $adId = $data['adId'];

        $method = Ads::archive()
            ->setSelectionCriteria((new IdsCriteria())->setIds([$adId]));

        $response = $this->createAndSendRequest($method);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $response->getResult('ArchiveResults')[0]->Errors[0]->Code);

        return $adGroupId;
    }

    /**
     * @depends testArchiveAd
     * @param int $adGroupId
     * @throws \direct\exceptions\WrapperException
     */
    public function testGetAds(int $adGroupId)
    {
        $method = Ads::get()
            ->setSelectionCriteria(
                (new AdsSelectionCriteria())->setAdGroupIds([$adGroupId])
            )
            ->setFieldNames([AdFieldEnum::Id()]);

        $response = $this->createAndSendRequest($method);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $response->getResult('Ads')[0]->Id);
    }

    /**
     * @depends testArchiveAd
     * @param int $adGroupId
     * @throws \direct\exceptions\WrapperException
     */
    public function testArchiveGroup(int $adGroupId)
    {
        $method = AdGroups::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())->setIds([$adGroupId])
            );

        $response = $this->createAndSendRequest($method);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8301, $response->getResult('DeleteResults')[0]->Errors[0]->Code);
    }

    /**
     * @depends testAddCampaign
     * @param int $campaignId
     * @throws \direct\exceptions\WrapperException
     */
    public function testArchiveCampaign(int $campaignId)
    {
        $method = Campaigns::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())->setIds([$campaignId])
            );

        $response = $this->createAndSendRequest($method);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals($campaignId, $response->getResult('DeleteResults')[0]->Id);
    }
}