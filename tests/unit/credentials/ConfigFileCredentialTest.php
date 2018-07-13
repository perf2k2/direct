<?php

namespace perf2k2\direct\tests\unit\credentials;

use perf2k2\direct\credentials\ConfigFileCredential;

class ConfigFileCredentialTest extends CredentialTest
{
    public static function setUpBeforeClass()
    {
        self::$credential = new ConfigFileCredential(__DIR__ . '/../../');
    }
}