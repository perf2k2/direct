<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\retargetinglists\RetargetingListAddItem;
use perf2k2\direct\api\entities\retargetinglists\RetargetingListRuleArgumentItem;
use perf2k2\direct\api\entities\retargetinglists\RetargetingListRuleItem;
use perf2k2\direct\api\entities\retargetinglists\RetargetingListSelectionCriteria;
use perf2k2\direct\api\entities\retargetinglists\RetargetingListUpdateItem;
use perf2k2\direct\api\enums\retargetinglists\RetargetingListRuleOperatorEnum;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\transport\Response;
use perf2k2\direct\RetargetingLists;

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
