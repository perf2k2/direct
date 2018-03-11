<?php

namespace direct\tests\stubs;

use direct\credentials\Credential;
use direct\http\Connection;
use direct\http\Request;

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