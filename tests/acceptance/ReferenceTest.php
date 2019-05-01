<?php

namespace acceptance;

use perf2k2\direct\api\entities\adgroups\AdGroupAddItem;
use perf2k2\direct\api\entities\ads\AdAddItem;
use perf2k2\direct\api\entities\ads\TextAdAdd;
use perf2k2\direct\api\entities\campaigns\CampaignAddItem;
use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\campaigns\textcampaign\StrategyAverageCpcAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\StrategyNetworkDefaultAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use perf2k2\direct\AdGroups;
use perf2k2\direct\Ads;
use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\Campaigns;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Client;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class ReferenceTest extends TestCase
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
        self::$client = new Client(new ConfigFileCredential(__DIR__ . '/../../'));
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
     * @throws WrapperException
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
     * @throws WrapperException
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
     * @throws WrapperException
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
     * @throws WrapperException
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
     * @throws WrapperException
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
     * @throws WrapperException
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
     * @throws WrapperException
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