<?php

namespace perf2k2\direct\tests\unit\transport;

use GuzzleHttp\Psr7\Response;
use perf2k2\direct\credentials\Credential;
use perf2k2\direct\tests\stubs\GuzzleClient;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ReportRequest;
use perf2k2\direct\transport\ReportResponse;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{

    public function testSendReport()
    {
        $client = $this->getMockBuilder(GuzzleClient::class)->getMock();
        $connection = new Connection(new Credential('token', 'client'));
        $request = new ReportRequest('', []);

        $reflection = new \ReflectionClass($connection);
        $prop = $reflection->getProperty('httpClient');
        $prop->setAccessible(true);
        $prop->setValue($connection, $client);


        $client->expects($this->any())
            ->method('post')
            ->willReturnOnConsecutiveCalls(
                new Response(200, ['RequestId' => [1]]),
                new Response(200, [
                    'retryIn' => ['5'],
                    'reportsInQueue' => ['1'],
                    'RequestId' => [2],
                ]),
                new Response(200, ['RequestId' => [3]])
            );

        $this->assertInstanceOf(ReportResponse::class, $connection->sendReport($request));

        $beginTime = time();
        $connection->sendReport($request);
        $endTime = time();

        $this->assertSame(5, $endTime - $beginTime);
        $this->assertTrue(($endTime - $beginTime) >= 5);
    }
}
