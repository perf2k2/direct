<?php

namespace perf2k2\direct\http;

use Dotenv\Dotenv;

class Connection
{
    protected $sandbox = false;

    public function __construct(string $configDir = __DIR__ . '/../../../../../', bool $isSandbox = false, string $configFile = '.env')
    {
        $config = new Dotenv($configDir, $configFile);

        $config->load();
        $config->required([
            'YANDEX_LOGIN',
            'DIRECT_API_TOKEN',
            'DIRECT_API_MASTER_TOKEN',
            'DIRECT_API_SANDBOX_MASTER_TOKEN',
            'DIRECT_ACCEPT_LANGUAGE'
        ]);

        $this->sandbox = $isSandbox;
    }

    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    public function createRequest(): Request
    {
        return new Request($this->isSandbox());
    }

    public function sendRequest(Request $request): Response
    {
        $result = $request->send();
        return new Response($result);
    }
}