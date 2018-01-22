<?php

namespace perf2k2\direct\tests\integration;

use api\entities\retargetinglists\RetargetingListAddItem;
use api\entities\retargetinglists\RetargetingListRuleArgumentItem;
use api\entities\retargetinglists\RetargetingListRuleItem;
use api\enums\retargetinglists\RetargetingListRuleOperatorEnum;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\http\Response;
use perf2k2\direct\RetargetingLists;
use perf2k2\direct\tests\stubs\FakeConnection;

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
                    new RetargetingListRuleItem([new RetargetingListRuleArgumentItem(1)], RetargetingListRuleOperatorEnum::ALL)
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
}
