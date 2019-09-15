<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\readers\JsonReader;
use perf2k2\direct\ReferenceClient;
use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\transport\ConnectionParams;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * @var ReferenceClient
     */
    protected static $client;

    public static function setUpBeforeClass()
    {
        self::$client = new ReferenceClient(
            new FakeConnection(new ConfigFileCredential(__DIR__ . '/../../'), new ConnectionParams()),
            new JsonReader()
        );
    }
    
    protected function createAndSendRequest($data)
    {
        return static::$client->send($data);
    }
}
