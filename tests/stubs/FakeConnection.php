<?php

namespace perf2k2\direct\tests\stubs;

use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\Request;
use perf2k2\direct\transport\Response;

class FakeConnection extends Connection
{
    public function send(Request $request): Response
    {
        return new Response(
            new Request('login', 'token', 'service', 'method', []),
            1,
            json_encode([
                'result' => [
                    'AddResults' => [
                        [
                            'Id' => 1,
                            'Warnings' => [
                                ['Code' => 1, 'Message' => 'Message 1', 'Details' => 'Detail message 1'],
                            ],
                            'Errors' => [
                                ['Code' => 2, 'Message' => 'Message 2', 'Details' => 'Detail message 2'],
                            ]
                        ]
                    ]
                ]
            ]),
            '1/1/1'
        );
    }
}