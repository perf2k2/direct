<?php

namespace perf2k2\direct\v5;

use Dotenv\Dotenv;
use perf2k2\direct\v5\exceptions\HttpException;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\http\Response;

class Connector
{
    protected $login;
    protected $token;
    protected $masterToken;
    protected $masterTokenSandbox;
    protected $acceptLanguage;

    protected $sandbox = false;

    public function __construct($configDir, bool $sandbox = false, string $configFile = '.env')
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

        $this->login = getenv('YANDEX_LOGIN');
        $this->token = getenv('DIRECT_API_TOKEN');
        $this->masterToken = getenv('DIRECT_API_MASTER_TOKEN');
        $this->masterTokenSandbox = getenv('DIRECT_API_SANDBOX_MASTER_TOKEN');
        $this->acceptLanguage = getenv('DIRECT_ACCEPT_LANGUAGE');
        $this->sandbox = $sandbox;
    }

    public function isSandbox()
    {
        return $this->sandbox;
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
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request->getHeaders());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getBody());
        $result = curl_exec($ch);

        if(curl_exec($ch) === false) {
            throw new HttpException(curl_error($ch), 404);
        }

        curl_close($ch);

        return new Response($result);
    }
}