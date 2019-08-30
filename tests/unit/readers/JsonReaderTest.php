<?php

namespace perf2k2\direct\tests\unit\readers;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\readers\JsonReader;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class JsonReaderTest extends TestCase
{

    public function testGetResult()
    {
        $request = new Request('', '', '', '', []);
        $reader = new JsonReader();
        $data = [
            'result' => [
                'Ads' => [
                    ['Id' => 1, 'CampaignId' => 12, 'AdGroupId' => 13],
                    ['Id' => 2, 'Status' => 'ACCEPTED'],
                ]
            ]
        ];

        $response = new Response($request, 1, json_encode($data));
        $result = $reader->parse($response)->getResult();

        $this->assertSame(1, $result->result->Ads[0]->Id);

        $result = $reader->parse($response)->getResult('Ads');

        $this->assertSame(1, $result[0]->Id);
        $this->assertSame(12, $result[0]->CampaignId);
        $this->assertSame(13, $result[0]->AdGroupId);
        $this->assertSame(2, $result[1]->Id);
        $this->assertSame('ACCEPTED', $result[1]->Status);

        try {
            $this->expectExceptionMessage('Empty result received');
            $response = new Response($request, 1, json_encode(['result' => null]));
            $reader->parse($response);
        } catch (WrapperException $e) {
            try {
                $this->expectExceptionMessage('Received json cannot be decoded');
                $response = new Response($request, 1, '');
                $reader->parse($response);
            } catch (WrapperException $e) {
                $this->expectExceptionMessage("Entity 'Wrong' not exists at response");
                $response = new Response($request, 1, json_encode($data));
                $reader->parse($response)->getResult('Wrong');
            }
        }
    }
}
