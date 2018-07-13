<?php

namespace acceptance;

use api\entities\reports\FilterItem;
use api\entities\reports\OrderBy;
use api\entities\reports\Page;
use api\entities\reports\SelectionCriteria;
use api\enums\reports\DateRangeTypeEnum;
use api\enums\reports\FieldEnum;
use api\enums\reports\FilterOperatorEnum;
use api\enums\reports\FormatEnum;
use api\enums\reports\OrderBySortOrderEnum;
use api\enums\reports\ReportTypeEnum;
use direct\api\enums\YesNoEnum;
use direct\credentials\ConfigFileCredential;
use direct\Reports;
use direct\transport\Client;
use direct\transport\Connection;
use transport\ReportResponse;

class ReportsTest extends \PHPUnit_Framework_TestCase
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
        return static::$connection->sendReport(static::$client->createReportRequest($method));
    }

    public function testGetCampaignStats()
    {
        $method = Reports::build()
            ->setSelectionCriteria(
                (new SelectionCriteria())
                    ->setDateFrom(new \DateTimeImmutable('yesterday'))
                    ->setDateTo(new \DateTimeImmutable('today'))
                    ->setFilter([
                        new FilterItem(FieldEnum::CampaignId(),FilterOperatorEnum::IN(), [1])
                    ])
            )
            ->setFieldNames([FieldEnum::CampaignId(), FieldEnum::CampaignName(), FieldEnum::CampaignType()])
            ->setPage(new Page(10))
            ->setOrderBy([new OrderBy(FieldEnum::CampaignId(), OrderBySortOrderEnum::DESCENDING())])
            ->setReportName('Campaigns stats')
            ->setReportType(ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT())
            ->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE())
            ->setFormat(FormatEnum::TSV())
            ->setIncludeVAT(YesNoEnum::NO())
            ->setIncludeDiscount(YesNoEnum::NO());

        $response = $this->createAndSendRequest($method);

        $this->assertInstanceOf(ReportResponse::class, $response);
        $this->assertNotFalse(strpos($response->getResult(), 'Campaigns stats'));
        $this->assertNotFalse(strpos($response->getResult(), 'CampaignName'));
        $this->assertNotFalse(strpos($response->getResult(), 'Total rows'));
    }

    public function testGetCampaignStatsNoAdditionalInfo()
    {
        $method = Reports::build()
            ->setSelectionCriteria(
                (new SelectionCriteria())
                    ->setDateFrom(new \DateTimeImmutable('yesterday'))
                    ->setDateTo(new \DateTimeImmutable('today'))
                    ->setFilter([
                        new FilterItem(FieldEnum::CampaignId(),FilterOperatorEnum::IN(), [1])
                    ])
            )
            ->setFieldNames([FieldEnum::CampaignId(), FieldEnum::CampaignName(), FieldEnum::CampaignType()])
            ->setPage(new Page(10))
            ->setOrderBy([new OrderBy(FieldEnum::CampaignId(), OrderBySortOrderEnum::DESCENDING())])
            ->setReportName('Campaigns stats')
            ->setReportType(ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT())
            ->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE())
            ->setFormat(FormatEnum::TSV())
            ->setIncludeVAT(YesNoEnum::NO())
            ->setIncludeDiscount(YesNoEnum::NO());

        $request = static::$client->createReportRequest($method);
        $request->returnMoneyInMicros(true)
            ->skipColumnHeader(true)
            ->skipReportHeader(true)
            ->skipReportSummary(true);
        $response = static::$connection->sendReport($request);

        $this->assertInstanceOf(ReportResponse::class, $response);
        $this->assertFalse(strpos($response->getResult(), 'Campaigns stats'));
        $this->assertFalse(strpos($response->getResult(), 'CampaignName'));
        $this->assertFalse(strpos($response->getResult(), 'Total rows'));
    }
}