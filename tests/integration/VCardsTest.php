<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\vcard\VCardFieldEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\VCards;

class VCardsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = VCards::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->setFieldNames([VCardFieldEnum::CompanyName])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
