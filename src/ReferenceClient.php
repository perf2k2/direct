<?php
declare(strict_types=1);

namespace perf2k2\direct;

use perf2k2\direct\api\NamedMethodInterface;
use perf2k2\direct\api\services\AdExtensionsService;
use perf2k2\direct\api\services\AdGroupsService;
use perf2k2\direct\api\services\AdImagesService;
use perf2k2\direct\api\services\AdsService;
use perf2k2\direct\api\services\AgencyClientsService;
use perf2k2\direct\api\services\AudienceTargetsService;
use perf2k2\direct\api\services\BidModifiersService;
use perf2k2\direct\api\services\BidsService;
use perf2k2\direct\api\services\CampaignsService;
use perf2k2\direct\api\services\ChangesService;
use perf2k2\direct\api\services\ClientsService;
use perf2k2\direct\api\services\DictionariesService;
use perf2k2\direct\api\services\DynamicTextAdTargetsService;
use perf2k2\direct\api\services\KeywordBidsService;
use perf2k2\direct\api\services\KeywordsResearchService;
use perf2k2\direct\api\services\RetargetingListsService;
use perf2k2\direct\api\services\SitelinksService;
use perf2k2\direct\api\services\VCardsService;
use perf2k2\direct\facades\Keywords;
use perf2k2\direct\helpers\ReferenceReaderInterface;
use perf2k2\direct\transport\Client as HttpClient;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\Response;

class ReferenceClient
{
    protected $httpClient;
    protected $connection;
    protected $reader;

    public function __construct(HttpClient $httpClient, Connection $connection, ReferenceReaderInterface $reader)
    {
        $this->httpClient = $httpClient;
        $this->connection = $connection;
        $this->reader = $reader;
    }

    public function send(NamedMethodInterface $method): Response
    {
        return $this->connection->send($this->httpClient->createRequest($method));
    }

    public function read(NamedMethodInterface $method): ReferenceReaderInterface
    {
        return $this->reader->parse(
            $this->send($method)
        );
    }

    public function AdExtensions(): AdExtensionsService
    {
        return new AdExtensionsService();
    }

    public function AdGroups(): AdGroupsService
    {
        return new AdGroupsService();
    }

    public function AdImages(): AdImagesService
    {
        return new AdImagesService();
    }

    public function Ads(): AdsService
    {
        return new AdsService();
    }

    public function AgencyClients(): AgencyClientsService
    {
        return new AgencyClientsService();
    }

    public function AudienceTargetsS(): AudienceTargetsService
    {
        return new AudienceTargetsService();
    }

    public function BidModifiers(): BidModifiersService
    {
        return new BidModifiersService();
    }

    public function Bids(): BidsService
    {
        return new BidsService();
    }

    public function Campaigns(): CampaignsService
    {
        return new CampaignsService();
    }

    public function Changes(): ChangesService
    {
        return new ChangesService();
    }

    public function Clients(): ClientsService
    {
        return new ClientsService();
    }

    public function Dictionaries(): DictionariesService
    {
        return new DictionariesService();
    }

    public function DynamicTextAdTargets(): DynamicTextAdTargetsService
    {
        return new DynamicTextAdTargetsService();
    }

    public function KeywordBids(): KeywordBidsService
    {
        return new KeywordBidsService();
    }

    public function KeywordsResearch(): KeywordsResearchService
    {
        return new KeywordsResearchService();
    }

    public function Keywords(): Keywords
    {
        return new Keywords();
    }

    public function RetargetingLists(): RetargetingListsService
    {
        return new RetargetingListsService();
    }

    public function Sitelinks(): SitelinksService
    {
        return new SitelinksService();
    }

    public function VCards(): VCardsService
    {
        return new VCardsService();
    }
}