<?php

namespace perf2k2\direct\credentials;

use Dotenv\Dotenv;

class ConfigFileCredential extends Credential implements CredentialInterface
{
    public function __construct(string $configDir = __DIR__ . '/../../', string $configFile = '.env')
    {
        $config = new Dotenv($configDir, $configFile);

        $config->load();
        $config->required([
            'YANDEX_LOGIN',
            'DIRECT_API_TOKEN',
            'DIRECT_API_SANDBOX_MASTER_TOKEN',
        ]);

        parent::__construct(getenv('DIRECT_API_TOKEN'), getenv('YANDEX_LOGIN'), getenv('DIRECT_API_SANDBOX_MASTER_TOKEN'));
    }
}