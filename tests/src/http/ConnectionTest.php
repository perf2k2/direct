<?php

namespace perf2k2\direct;

use perf2k2\direct\http\Connection;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../../', true);
    }

    public function testIsSandbox()
    {
        $this->assertTrue(self::$connection->isSandbox());
    }

    public function testSend()
    {
        $response = self::$connection->request('campaigns', 'get', [
            'SelectionCriteria' => [
                'Ids' => [CampaignsTest::DEFAULT_CAMPAIGN],
            ],
            'FieldNames' => ['Id', 'Name'],
        ]);

        $this->assertInstanceOf('perf2k2\direct\http\Response', $response);
    }
}