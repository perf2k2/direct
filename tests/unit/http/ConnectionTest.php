<?php

namespace perf2k2\direct\tests\unit\http;

use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\transport\Request;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testSend()
    {
        $connection = new FakeConnection();
        $response = $connection->send(
            new Request('login', 'token', 'ads', 'get', ['Ids' => [1, 2, 3]])
        );
        
        $this->assertEquals(1, $response->getRequestId());
        $this->assertEquals(null, $response->getResult());
        $this->assertEquals('1/1/1', $response->getUnits());
    }
}