<?php

namespace perf2k2\direct\tests\unit\http;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    public function testGetResult()
    {
        $ad = ['Id' => 1, 'CampaignId' => 1];
        $ads = ['Ads' => [$ad]];
        $request = new Request('login', 'token', 'service', 'method', []);
        $response = new Response($request, 1, json_encode([
            'result' => $ads
        ]), '1/1/1');
        
        $this->assertEquals(json_decode(json_encode($ads)), $response->getResult());
        $this->assertEquals(json_decode(json_encode([$ad])), $response->getResult('Ads'));
    
        $this->expectException(WrapperException::class);
        $response->getResult('Custom');
        
        $this->expectException(WrapperException::class);
        new Response($request, 1,'invalid json');
    }
}