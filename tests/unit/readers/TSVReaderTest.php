<?php

namespace perf2k2\direct\tests\unit\readers;

use perf2k2\direct\readers\TSVReader;
use perf2k2\direct\transport\ReportRequest;
use perf2k2\direct\transport\ReportResponse;
use PHPUnit\Framework\TestCase;

class TSVReaderTest extends TestCase
{
    private static $reader;
    private static $reader2;

    public static function setUpBeforeClass()
    {
        $request = new ReportRequest('', []);
        $response = new ReportResponse($request, 1, 1, file_get_contents(__DIR__ . '/../../report.tsv'));
        self::$reader = (new TSVReader())->parse($response);

        $request = new ReportRequest('', []);
        $request->skipReportHeader(true);
        $request->skipColumnHeader(true);
        $request->skipReportSummary(true);
        $response = new ReportResponse($request, 1, 1, file_get_contents(__DIR__ . '/../../report.tsv'));
        self::$reader2 = (new TSVReader())->parse($response);
    }

    public function testGetReportName()
    {
        $this->assertSame('"Campaigns stats (2019-08-29 - 2019-08-30)"', self::$reader->getReportName());

        $this->expectExceptionMessage('Report name not available');
        self::$reader2->getReportName();
    }

    public function testGetHeaders()
    {
        $this->assertSame(['CampaignId', 'CampaignName', 'CampaignType'], self::$reader->getHeaders());

        $this->expectExceptionMessage('Report headers not available');
        self::$reader2->getHeaders();
    }

    public function testGetSummary()
    {
        $this->assertSame('Total rows: 0', self::$reader->getSummary());

        $this->expectExceptionMessage('Report summary not available');
        self::$reader2->getSummary();
    }

    public function testAsArray()
    {
        $this->assertSame([
            ['1', 'Test Campaign', 'TEXT_CAMPAIGN']
        ], self::$reader->asArray());
    }
}
