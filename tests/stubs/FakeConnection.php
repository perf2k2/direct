<?php

namespace perf2k2\direct\tests\stubs;

use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Request;

class FakeConnection extends Connection
{
    public function __construct()
    {
        parent::__construct(__DIR__ . '/../../', true);
    }

    public function createRequest(): Request
    {
        return new FakeRequest();
    }
}