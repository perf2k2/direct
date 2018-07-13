<?php

namespace acceptance;

use helpers\TSVReader;
use perf2k2\direct\api\entities\reports\FilterItem;
use perf2k2\direct\api\entities\reports\OrderBy;
use perf2k2\direct\api\entities\reports\Page;
use perf2k2\direct\api\entities\reports\SelectionCriteria;
use perf2k2\direct\api\enums\reports\DateRangeTypeEnum;
use perf2k2\direct\api\enums\reports\FieldEnum;
use perf2k2\direct\api\enums\reports\FilterOperatorEnum;
use perf2k2\direct\api\enums\reports\FormatEnum;
use perf2k2\direct\api\enums\reports\OrderBySortOrderEnum;
use perf2k2\direct\api\enums\reports\ReportTypeEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\Reports;
use perf2k2\direct\transport\Client;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ReportResponse;

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
        self::$client = new Client(new ConfigFileCredential(__DIR__ . '/../../'));
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
        $reader = TSVReader::fromResponse($response);
        $data = $reader->asArray();

        $this->assertInstanceOf(ReportResponse::class, $response);
        $this->assertNotFalse(strpos($reader->getReportName(), 'Campaigns stats'));
        $this->assertEquals($reader->getHeaders()[1], 'CampaignName');
        $this->assertNotFalse(strpos($reader->getSummary(), 'Total rows'));
        $this->assertInternalType('numeric', $data[0][0]);
        $this->assertInternalType('string', $data[0][1]);
        $this->assertInternalType('string', $data[0][2]);
    }

    public function testGetCampaignStatsNoAdditionalInfo()
    {
        $method = Reports::build()
            ->setSelectionCriteria(
                (new SelectionCriteria())
                    ->setDateFrom(new \DateTimeImmutable('yesterday'))
                    ->setDateTo(new \DateTimeImmutable('today'))
                    ->setFilter([
                        new FilterItem(FieldEnum::CampaignType(), FilterOperatorEnum::IN(), ['TEXT_CAMPAIGN'])
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
        $reader = new TSVReader($response->getResult(), true, true, true);

        foreach ($reader as list($id, $name, $type)) {
            $this->assertInternalType('numeric', $id);
            $this->assertInternalType('string', $name);
            $this->assertEquals('TEXT_CAMPAIGN', $type);
        }

        $this->assertInstanceOf(ReportResponse::class, $response);

        $this->expectException(WrapperException::class);
        $reader->getReportName();

        $this->expectException(WrapperException::class);
        $reader->getHeaders();

        $this->expectException(WrapperException::class);
        $reader->getSummary();
    }
}