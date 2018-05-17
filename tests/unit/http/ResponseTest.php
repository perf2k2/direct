<?php

namespace direct\tests\unit\http;

use direct\exceptions\WrapperException;
use direct\http\Response;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResult()
    {
        $ad = ['Id' => 1, 'CampaignId' => 1];
        $ads = ['Ads' => [$ad]];
        $response = new Response(json_encode([
            'result' => $ads
        ]));
        
        $this->assertEquals(json_decode(json_encode($ads)), $response->getResult());
        $this->assertEquals(json_decode(json_encode([$ad])), $response->getResult('Ads'));
    
        $this->expectException(WrapperException::class);
        $response->getResult('Custom');
        
        $this->expectException(WrapperException::class);
        new Response('invalid json');
    }
}