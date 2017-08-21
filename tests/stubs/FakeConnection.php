<?php

namespace perf2k2\direct\tests\stubs;

use perf2k2\direct\credentials\Credential;
use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Request;

class FakeConnection extends Connection
{
    public function __construct()
    {
        parent::__construct(new Credential('token', 'login'), 'ru', true);
    }

    public function createRequest(): Request
    {
        return new FakeRequest($this->credential, $this->acceptLanguage, $this->isSandbox);
    }
}