<?php

namespace direct\tests\integration;

use direct\api\entities\InstantMessenger;
use direct\api\entities\MapPoint;
use direct\api\entities\Phone;
use direct\api\entities\vcards\VCardAddItem;
use direct\api\entities\IdsCriteria;
use direct\api\enums\vcard\VCardFieldEnum;
use direct\transport\Response;
use direct\VCards;

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
