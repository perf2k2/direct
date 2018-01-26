<?php

namespace perf2k2\direct\tests\integration;

use api\entities\InstantMessenger;
use api\entities\MapPoint;
use api\entities\Phone;
use api\entities\vcards\VCardAddItem;
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
    
    public function testAdd()
    {
        $response = VCards::add()
            ->setVCards([
                (new VCardAddItem(1000, 'Росиия', 'Москва', 'Компания', '10-19', new Phone('7', '495', '1112233')))
                    ->setInstantMessenger(new InstantMessenger('client', 'login'))
                    ->setPointOnMap(new MapPoint(1.0, 0.5, 1.0, 0.5, 1.0, 0.5))
                    ->setBuilding('1B')
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
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
    
    public function testDelete()
    {
        $response = VCards::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}
