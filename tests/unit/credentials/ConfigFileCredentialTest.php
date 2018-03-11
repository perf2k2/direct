<?php

namespace direct\tests\unit\credentials;

use direct\credentials\ConfigFileCredential;

class ConfigFileCredentialTest extends CredentialTest
{
    public static function setUpBeforeClass()
    {
        self::$credential = new ConfigFileCredential(__DIR__ . '/../../');
    }
}