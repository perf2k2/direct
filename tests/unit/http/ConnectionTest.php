<?php

namespace direct\tests\unit\http;

use direct\http\Request;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

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