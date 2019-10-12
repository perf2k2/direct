<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\negativekeywordsharedsets\NegativeKeywordSharedSetAddItem;
use perf2k2\direct\api\entities\negativekeywordsharedsets\NegativeKeywordSharedSetUpdateItem;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\negativekeywordsharedsets\NegativeKeywordSharedSetFieldEnum;
use perf2k2\direct\transport\Response;

class NegativeKeywordSharedSetsTest extends BaseTestCase {

    public function testAdd()
    {
        $method = self::$client->getNegativeKeywordSharedSetsService()
            ->getAddMethod()
            ->setNegativeKeywordSharedSets([
                new NegativeKeywordSharedSetAddItem('word', ['word2', 'word3'])
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = self::$client->getNegativeKeywordSharedSetsService()
            ->getDeleteMethod()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([1, 2, 3])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = self::$client->getNegativeKeywordSharedSetsService()
            ->getGetMethod()
            ->setSelectionCriteria((new IdsCriteria())->setIds([1, 2, 3]))
            ->setFieldNames([
                NegativeKeywordSharedSetFieldEnum::Id(),
                NegativeKeywordSharedSetFieldEnum::Name(),
                NegativeKeywordSharedSetFieldEnum::Associated(),
            ]);

        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUpdate()
    {
        $method = self::$client->getNegativeKeywordSharedSetsService()
            ->getUpdateMethod()
            ->setNegativeKeywordSharedSets([
                (new NegativeKeywordSharedSetUpdateItem(1))
                    ->setName('name')
                    ->setNegativeKeywords(['keyword'])
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}