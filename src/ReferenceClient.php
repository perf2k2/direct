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
use perf2k2\direct\api\services\CreativesService;
use perf2k2\direct\api\services\DictionariesService;
use perf2k2\direct\api\services\DynamicTextAdTargetsService;
use perf2k2\direct\api\services\KeywordBidsService;
use perf2k2\direct\api\services\KeywordsResearchService;
use perf2k2\direct\api\services\KeywordsService;
use perf2k2\direct\api\services\RetargetingListsService;
use perf2k2\direct\api\services\SitelinksService;
use perf2k2\direct\api\services\VCardsService;
use perf2k2\direct\readers\ReferenceReaderInterface;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ParamsConverter;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;

class ReferenceClient
{
    protected $connection;
    protected $reader;

    public function __construct(Connection $connection, ReferenceReaderInterface $reader)
    {
        $this->connection = $connection;
        $this->reader = $reader;
    }

    public function createRequest(NamedMethodInterface $method): Request
    {
        return new Request(
            $method->getServiceName(),
            $method->getApiName(),
            (new ParamsConverter($method->getData()))->toArray()
        );
    }

    public function sendRequest(Request $request): Response
    {
        return $this->connection->send($request);
    }

    public function send(NamedMethodInterface $method): Response
    {
        $request = $this->createRequest($method);
        return $this->connection->send($request);
    }

    public function process(NamedMethodInterface $method): ReferenceReaderInterface
    {
        return $this->reader->parse(
            $this->send($method)
        );
    }

    public function getAdExtensionsService(): AdExtensionsService
    {
        return new AdExtensionsService();
    }

    public function getAdGroupsService(): AdGroupsService
    {
        return new AdGroupsService();
    }

    public function getAdImagesService(): AdImagesService
    {
        return new AdImagesService();
    }

    public function getAdsService(): AdsService
    {
        return new AdsService();
    }

    public function getAgencyClientsService(): AgencyClientsService
    {
        return new AgencyClientsService();
    }

    public function getAudienceTargetsService(): AudienceTargetsService
    {
        return new AudienceTargetsService();
    }

    public function getBidModifiersService(): BidModifiersService
    {
        return new BidModifiersService();
    }

    public function getBidsService(): BidsService
    {
        return new BidsService();
    }

    public function getCampaignsService(): CampaignsService
    {
        return new CampaignsService();
    }

    public function getChangesService(): ChangesService
    {
        return new ChangesService();
    }

    public function getClientsService(): ClientsService
    {
        return new ClientsService();
    }

    public function getDictionariesService(): DictionariesService
    {
        return new DictionariesService();
    }

    public function getDynamicTextAdTargetsService(): DynamicTextAdTargetsService
    {
        return new DynamicTextAdTargetsService();
    }

    public function getKeywordBidsService(): KeywordBidsService
    {
        return new KeywordBidsService();
    }

    public function getKeywordsResearchService(): KeywordsResearchService
    {
        return new KeywordsResearchService();
    }

    public function getKeywordsService(): KeywordsService
    {
        return new KeywordsService();
    }

    public function getRetargetingListsService(): RetargetingListsService
    {
        return new RetargetingListsService();
    }

    public function getSitelinksService(): SitelinksService
    {
        return new SitelinksService();
    }

    public function getVCardsService(): VCardsService
    {
        return new VCardsService();
    }

    public function getCreativesService(): CreativesService
    {
        return new CreativesService();
    }
}