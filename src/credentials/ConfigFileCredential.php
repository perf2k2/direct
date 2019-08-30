<?php

namespace perf2k2\direct\credentials;

use Dotenv\Dotenv;

class ConfigFileCredential extends Credential
{
    public function __construct(string $configDir, string $configFile = '.env', bool $overwrite = false)
    {
        $config = new Dotenv($configDir, $configFile);

        if ($overwrite) {
            $config->overload();
        } else {
            $config->load();
        }

        $config->required([
            'YANDEX_LOGIN',
            'DIRECT_API_TOKEN',
            'DIRECT_API_SANDBOX_MASTER_TOKEN',
        ]);

        parent::__construct(getenv('DIRECT_API_TOKEN'), getenv('YANDEX_LOGIN'), getenv('DIRECT_API_SANDBOX_MASTER_TOKEN'));
    }
}