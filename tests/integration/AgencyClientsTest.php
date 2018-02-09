<?php

namespace perf2k2\direct\tests\integration;

use api\entities\agencyclients\AgencyClientsSelectionCriteria;
use api\enums\agencyclients\AgencyClientFieldEnum;
use perf2k2\direct\AgencyClients;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class AgencyClientsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = AgencyClients::get()
            ->setSelectionCriteria(
                (new AgencyClientsSelectionCriteria())
                    ->setLogins(['login'])
                    ->setArchived(YesNoEnum::YES)
            )
            ->setFieldNames([
                AgencyClientFieldEnum::AccountQuality,
                AgencyClientFieldEnum::CountryId,
                AgencyClientFieldEnum::Currency,
            ])
            ->setPage(new LimitOffset(10))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}