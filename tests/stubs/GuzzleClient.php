<?php
declare(strict_types=1);

namespace perf2k2\direct\tests\stubs;

use GuzzleHttp\Client;

class GuzzleClient extends Client
{
    public function post(string $uri, array $options = [])
    {

    }
}