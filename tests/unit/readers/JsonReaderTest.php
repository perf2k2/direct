<?php

namespace perf2k2\direct\tests\unit\readers;

use perf2k2\direct\exceptions\ReaderException;
use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\readers\JsonReader;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class JsonReaderTest extends TestCase
{

    public function testGetResult()
    {
        // Arrange

        $request = new Request('ads', 'add', []);
        $reader = new JsonReader();
        $data = [
            'result' => [
                'Ads' => [
                    ['Id' => 1, 'CampaignId' => 12, 'AdGroupId' => 13],
                    ['Id' => 2, 'Status' => 'ACCEPTED'],
                ]
            ]
        ];
        $errorJson = '{"error":{"request_id":"2677720977159376392","error_code":8000,"error_detail":"The required field AdGroupId is omitted in an item in the Ads array","error_string":"Invalid request"}}';

        // Act

        $response = new Response($request, 1, json_encode($data));
        $nullResponse = new Response($request, 1, json_encode(['result' => null]));
        $emptyResponse = new Response($request, 1, '');
        $errorResponse = new Response($request, 1, $errorJson);

        $result = $reader->parse($response)->getResult();
        $adsResult = $reader->parse($response)->getResult('Ads');

        // Assert

        $this->assertSame(1, $result->result->Ads[0]->Id);
        $this->assertSame(1, $adsResult[0]->Id);
        $this->assertSame(12, $adsResult[0]->CampaignId);
        $this->assertSame(13, $adsResult[0]->AdGroupId);
        $this->assertSame(2, $adsResult[1]->Id);
        $this->assertSame('ACCEPTED', $adsResult[1]->Status);

        try {
            $this->expectExceptionMessage('Empty result received');
            $reader->parse($nullResponse);
        } catch (WrapperException $e) {
            try {
                $this->expectExceptionMessage('Received json cannot be decoded');
                $reader->parse($emptyResponse);
            } catch (WrapperException $e) {
                try {
                    $this->expectExceptionMessage("Entity 'Wrong' not exists at response");
                    $reader->parse($response)->getResult('Wrong');
                } catch (ReaderException $e) {
                    $this->expectExceptionMessage('API call returns error (code 8000) on method "add" of service "ads": The required field AdGroupId is omitted in an item in the Ads array');
                    $reader->parse($errorResponse)->getResult('Ads');
                }
            }
        }
    }
}
