<?php

namespace direct\tests\integration;

use direct\api\entities\retargetinglists\RetargetingListAddItem;
use direct\api\entities\retargetinglists\RetargetingListRuleArgumentItem;
use direct\api\entities\retargetinglists\RetargetingListRuleItem;
use direct\api\entities\retargetinglists\RetargetingListSelectionCriteria;
use direct\api\entities\retargetinglists\RetargetingListUpdateItem;
use direct\api\enums\retargetinglists\RetargetingListRuleOperatorEnum;
use direct\api\entities\IdsCriteria;
use direct\transport\Response;
use direct\RetargetingLists;

class RetargetingListsTest extends BaseTestCase {

    public function testAdd()
    {
        $method = RetargetingLists::add()
            ->setRetargetingLists([
                (new RetargetingListAddItem('name'))
                ->setDescription('description')
                ->setRules([
                    new RetargetingListRuleItem([new RetargetingListRuleArgumentItem(1)], RetargetingListRuleOperatorEnum::ALL())
                ])
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testUpdate()
    {
        $method = RetargetingLists::update()
            ->setRetargetingLists([
                (new RetargetingListUpdateItem(1))
                    ->setName('name')
                    ->setDescription('description')
                    ->setRules([
                        new RetargetingListRuleItem([new RetargetingListRuleArgumentItem(1)], RetargetingListRuleOperatorEnum::ALL())
                    ])
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = RetargetingLists::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testGet()
    {
        $method = RetargetingLists::get()
            ->setSelectionCriteria((new RetargetingListSelectionCriteria())->setIds([]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
