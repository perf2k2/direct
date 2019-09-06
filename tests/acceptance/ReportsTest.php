<?php

namespace acceptance;

use perf2k2\direct\api\entities\reports\OrderBy;
use perf2k2\direct\api\entities\reports\Page;
use perf2k2\direct\api\entities\reports\SelectionCriteria;
use perf2k2\direct\api\enums\reports\DateRangeTypeEnum;
use perf2k2\direct\api\enums\reports\FieldEnum;
use perf2k2\direct\api\enums\reports\FormatEnum;
use perf2k2\direct\api\enums\reports\OrderBySortOrderEnum;
use perf2k2\direct\api\enums\reports\ReportTypeEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\readers\TSVReader;
use perf2k2\direct\ReportClient;
use perf2k2\direct\transport\Connection;
use PHPUnit\Framework\TestCase;

class ReportsTest extends TestCase
{
    public function testGetCampaignStats()
    {
        $client = new ReportClient(
            new Connection(new ConfigFileCredential(__DIR__ . '/../../'), true),
            new TSVReader()
        );

        $method = $client->getReportsService()
            ->getBuildMethod()
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

        $reader = $client->process($method);

        $this->assertNotFalse(strpos($reader->getReportName(), 'Campaigns stats'));
        $this->assertEquals($reader->getHeaders()[1], 'CampaignName');
        $this->assertNotFalse(strpos($reader->getSummary(), 'Total rows'));
    }
}