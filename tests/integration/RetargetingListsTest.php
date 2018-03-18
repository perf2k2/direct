<?php

namespace direct\tests\integration;

use direct\api\entities\retargetinglists\RetargetingListAddItem;
use direct\api\entities\retargetinglists\RetargetingListRuleArgumentItem;
use direct\api\entities\retargetinglists\RetargetingListRuleItem;
use direct\api\entities\retargetinglists\RetargetingListSelectionCriteria;
use direct\api\entities\retargetinglists\RetargetingListUpdateItem;
use direct\api\enums\retargetinglists\RetargetingListRuleOperatorEnum;
use direct\api\entities\IdsCriteria;
use direct\http\Response;
use direct\RetargetingLists;
use direct\tests\stubs\FakeConnection;

class RetargetingListsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = RetargetingLists::add()
            ->setRetargetingLists([
                (new RetargetingListAddItem('name'))
                ->setDescription('description')
                ->setRules([
                    new RetargetingListRuleItem([new RetargetingListRuleArgumentItem(1)], RetargetingListRuleOperatorEnum::ALL())
                ])
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testUpdate()
    {
        $response = RetargetingLists::update()
            ->setRetargetingLists([
                (new RetargetingListUpdateItem(1))
                    ->setName('name')
                    ->setDescription('description')
                    ->setRules([
                        new RetargetingListRuleItem([new RetargetingListRuleArgumentItem(1)], RetargetingListRuleOperatorEnum::ALL())
                    ])
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = RetargetingLists::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testGet()
    {
        $response = RetargetingLists::get()
            ->setSelectionCriteria((new RetargetingListSelectionCriteria())->setIds([]))
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}
