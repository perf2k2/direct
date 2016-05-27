<?php

namespace perf2k2\direct;

use Dotenv\Dotenv;
use perf2k2\direct\api\params\ParamsInterface;
use perf2k2\direct\http\Request;
use perf2k2\direct\http\Response;

class Connector
{
    protected $sandbox = false;
    protected $request;

    public function __construct(string $configDir, bool $isSandbox = false, string $configFile = '.env')
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

        $this->request = new Request(
            getenv('YANDEX_LOGIN'),
            getenv('DIRECT_API_TOKEN'),
            getenv('DIRECT_ACCEPT_LANGUAGE'),
            $isSandbox
        );

        $this->sandbox = $isSandbox;
    }

    public function isSandbox()
    {
        return $this->sandbox;
    }

    public function request(string $service, string $method, ParamsInterface $params): Response
    {
        $result = $this->request->send($service, $method, $params);
        return new Response($result);
    }
}