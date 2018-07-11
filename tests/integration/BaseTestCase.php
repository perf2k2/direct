<?php

namespace direct\tests\integration;

use direct\credentials\ConfigFileCredential;
use direct\tests\stubs\FakeConnection;
use direct\transport\Client;

class BaseTestCase extends \PHPUnit_Framework_TestCase
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
        self::$client = new Client(new ConfigFileCredential());
        self::$connection = new FakeConnection();
    }
    
    protected function createAndSendRequest($data)
    {
        return static::$connection->send(static::$client->createRequest($data));
    }
}
