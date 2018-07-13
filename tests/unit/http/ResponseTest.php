<?php

namespace perf2k2\direct\tests\unit\http;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Response;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResult()
    {
        $ad = ['Id' => 1, 'CampaignId' => 1];
        $ads = ['Ads' => [$ad]];
        $response = new Response(1, json_encode([
            'result' => $ads
        ]), '1/1/1');
        
        $this->assertEquals(json_decode(json_encode($ads)), $response->getResult());
        $this->assertEquals(json_decode(json_encode([$ad])), $response->getResult('Ads'));
    
        $this->expectException(WrapperException::class);
        $response->getResult('Custom');
        
        $this->expectException(WrapperException::class);
        new Response(1,'invalid json');
    }
}