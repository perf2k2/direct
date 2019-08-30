<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\InstantMessenger;
use perf2k2\direct\api\entities\MapPoint;
use perf2k2\direct\api\entities\Phone;
use perf2k2\direct\api\entities\vcards\VCardAddItem;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\vcard\VCardFieldEnum;
use perf2k2\direct\transport\Response;
use perf2k2\direct\facades\VCards;

class VCardsTest extends BaseTestCase {
    
    public function testAdd()
    {
        $method = VCards::add()
            ->setVCards([
                (new VCardAddItem(1000, 'Росиия', 'Москва', 'Компания', '10-19', new Phone('7', '495', '1112233')))
                    ->setInstantMessenger(new InstantMessenger('client', 'login'))
                    ->setPointOnMap(new MapPoint(1.0, 0.5, 1.0, 0.5, 1.0, 0.5))
                    ->setBuilding('1B')
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = VCards::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->setFieldNames([VCardFieldEnum::CompanyName()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testDelete()
    {
        $method = VCards::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
