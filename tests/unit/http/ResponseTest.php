<?php

namespace perf2k2\direct\tests\unit\http;

use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    /**
     * @var Response
     */
    protected static $response;

    public static function setUpBeforeClass()
    {
        $ad = ['Id' => 1, 'CampaignId' => 1];
        $ads = ['Ads' => [$ad]];
        $request = new Request('login', 'token', 'service', 'method', []);
        self::$response = new Response($request, 1, json_encode([
            'result' => $ads
        ]), '1/1/1');
    }

    public function testGetRequestId()
    {
        $this->assertEquals(1, self::$response->getRequestId());
    }

    public function testGetBody()
    {
        $this->assertEquals('{"result":{"Ads":[{"Id":1,"CampaignId":1}]}}', self::$response->getBody());
    }

    public function testGetUnits()
    {
        $this->assertEquals('1/1/1', self::$response->getUnits());
    }

    public function testGetRequest()
    {
        $this->assertInstanceOf(Request::class, self::$response->getRequest());
    }
}