<?php

namespace perf2k2\direct\tests\unit\transport;

use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testSend()
    {
        $connection = new FakeConnection();
        $response = $connection->send(
            new Request('login', 'token', 'ads', 'get', ['Ids' => [1, 2, 3]])
        );
        
        $this->assertInstanceOf(Response::class, $response);
    }
}