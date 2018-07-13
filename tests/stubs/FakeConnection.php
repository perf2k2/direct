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
            '{"result": null}',
            '1/1/1'
        );
    }
}