<?php

namespace perf2k2\direct\tests\unit\readers;

use perf2k2\direct\readers\TSVReader;
use PHPUnit\Framework\TestCase;

class TSVReaderTest extends TestCase
{
    private static $reader;
    private static $reader2;

    public static function setUpBeforeClass()
    {
        self::$reader = new TSVReader(file_get_contents(__DIR__ . '/../../report.tsv'), false, false, false);
        self::$reader2 = new TSVReader(file_get_contents(__DIR__ . '/../../report.tsv'), true, true, true);
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
