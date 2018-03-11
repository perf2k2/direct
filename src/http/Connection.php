<?php

namespace direct\http;

use direct\credentials\CredentialInterface;

class Connection
{
    protected $credential;
    protected $acceptLanguage;
    protected $isSandbox;

    public function __construct(CredentialInterface $credential, string $acceptLanguage = 'ru', bool $isSandbox = false)
    {
        $this->credential = $credential;
        $this->acceptLanguage = $acceptLanguage;
        $this->isSandbox = $isSandbox;
    }

    public function isSandbox(): bool
    {
        return $this->isSandbox;
    }

    public function createRequest(): Request
    {
        return new Request($this->credential, $this->acceptLanguage, $this->isSandbox());
    }

    public function sendRequest(Request $request): Response
    {
        $result = $request->send();
        return new Response($result);
    }
}