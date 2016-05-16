<?php

namespace perf2k2\direct\v5;

use Dotenv\Dotenv;

class Connection
{
    protected $login;
    protected $token;
    protected $masterToken;
    protected $masterTokenSandbox;
    protected $acceptLanguage;

    protected $sandbox = false;

    public function __construct(bool $sandbox = false, string $config = '.env')
    {
        $config = new Dotenv(__DIR__, $config);
        $config->load();
        $config->required([
            'YANDEX_LOGIN',
            'DIRECT_API_TOKEN',
            'DIRECT_API_MASTER_TOKEN',
            'DIRECT_API_SANDBOX_MASTER_TOKEN',
            'DIRECT_ACCEPT_LANGUAGE'
        ]);

        $this->login = getenv('YANDEX_LOGIN');
        $this->token = getenv('DIRECT_API_TOKEN');
        $this->masterToken = getenv('DIRECT_API_MASTER_TOKEN');
        $this->masterTokenSandbox = getenv('DIRECT_API_SANDBOX_MASTER_TOKEN');
        $this->acceptLanguage = getenv('DIRECT_ACCEPT_LANGUAGE');

        $this->sandbox = $sandbox;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getAcceptLanguage(): string
    {
        return $this->acceptLanguage;
    }

    public function send(Request $request): Response
    {
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $request->getUri());
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request->getHeaders($this));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getBody());
        $result = curl_exec($ch);
        curl_close($ch);

        return new Response($result);
    }
}