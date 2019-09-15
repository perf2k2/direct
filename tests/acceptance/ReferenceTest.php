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
use perf2k2\direct\facades\AdGroups;
use perf2k2\direct\facades\Ads;
use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\facades\Campaigns;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\readers\JsonReader;
use perf2k2\direct\ReferenceClient;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ConnectionParams;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class ReferenceTest extends TestCase
{
    /**
     * @var Connection
     */
    protected static $client;

    public static function setUpBeforeClass()
    {
        self::$client = new ReferenceClient(
            new Connection(
                new ConfigFileCredential(__DIR__ . '/../../'),
                (new ConnectionParams())->setIsSandbox(true)
            ),
            new JsonReader()
        );
    }

    protected function createAndSendRequest($method)
    {
        return static::$client->send($method);
    }

    public function testAddCampaign()
    {
        $method = Campaigns::add()
            ->setCampaigns([
                (new CampaignAddItem('Test Campaign', (new \DateTime())->add(new \DateInterval('P1D'))->format('Y-m-d')))
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
        $campaignId = (new JsonReader())->parse($response)->getResult('AddResults')[0]->Id;

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
        $campaignId = (new JsonReader())->parse($response)->getResult('Campaigns')[0]->Id;

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
        $adGroupId = (new JsonReader())->parse($response)->getResult('AddResults')[0]->Id;

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
        $adId = (new JsonReader())->parse($response)->getResult('AddResults')[0]->Id;

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
        $code = (new JsonReader())->parse($response)->getResult('ModerateResults')[0]->Errors[0]->Code;

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $code);
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
        $code = (new JsonReader())->parse($response)->getResult('ArchiveResults')[0]->Errors[0]->Code;

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8300, $code);

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
        $adId = (new JsonReader())->parse($response)->getResult('Ads')[0]->Id;

        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $adId);
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
        $code = (new JsonReader())->parse($response)->getResult('DeleteResults')[0]->Errors[0]->Code;

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(8301, $code);
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
        $campaignId2 = (new JsonReader())->parse($response)->getResult('DeleteResults')[0]->Id;

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals($campaignId, $campaignId2);
    }
}