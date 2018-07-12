<?php

namespace direct\tests\stubs;

use direct\transport\Connection;
use direct\transport\Request;
use direct\transport\Response;

class FakeConnection extends Connection
{
    public function send(Request $request): Response
    {
        return new Response(1,'{"result": null}', '1/1/1');
    }
}