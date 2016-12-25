<?php

namespace perf2k2\direct\tests\src\http;

use perf2k2\direct\http\Request;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FakeConnection
     */
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testIsSandbox()
    {
        $this->assertTrue(self::$connection->isSandbox());
    }

    public function testCreateRequest()
    {
        $request = self::$connection->createRequest();
        $this->assertInstanceOf(Request::class, $request);
        return $request;
    }

    /**
     * @depends testCreateRequest
     */
    public function testSendRequest($request)
    {
        $response = self::$connection->sendRequest($request);
        $this->assertInstanceOf(Response::class, $response);
    }
}