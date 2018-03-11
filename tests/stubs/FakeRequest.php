<?php

namespace direct\tests\stubs;

use direct\http\Request;

class FakeRequest extends Request
{
    public function send(int $maxConnectionAttempts = 5, int $dnsCacheTimeout = 600): string
    {
        return '{"result":{"AddResults":[{"Id": 7654321}]}}';
    }
}