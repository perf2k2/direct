<?php

namespace perf2k2\direct\tests\stubs;

use perf2k2\direct\http\Request;

class FakeRequest extends Request
{
    public function send(int $maxConnectionAttempts = 5, int $dnsCacheTimeout = 600): string
    {
        return '{"result":{"AddResults":[{"Id": 7654321}]}}';
    }
}