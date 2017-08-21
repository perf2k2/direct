<?php

namespace perf2k2\direct\tests\stubs;

use perf2k2\direct\http\Request;

class FakeRequest extends Request
{
    public function send($attempt = 0): string
    {
        return '{"result":{"AddResults":[{"Id": 7654321}]}}';
    }
}