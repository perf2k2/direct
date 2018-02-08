<?php

namespace perf2k2\direct\tests\integration;

use api\enums\clients\ClientFieldEnum;
use perf2k2\direct\Clients;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class ClientsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Clients::get()
            ->setFieldNames([
                ClientFieldEnum::Archived,
                ClientFieldEnum::CountryId,
                ClientFieldEnum::Currency
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}