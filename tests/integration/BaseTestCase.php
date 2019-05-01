<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\transport\Client;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * @var Client
     */
    protected static $client;
    /**
     * @var FakeConnection
     */
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$client = new Client(new ConfigFileCredential(__DIR__ . '/../../'));
        self::$connection = new FakeConnection();
    }
    
    protected function createAndSendRequest($data)
    {
        return static::$connection->send(static::$client->createRequest($data));
    }
}
