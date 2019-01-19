<?php

namespace perf2k2\direct\tests\integration;

use api\entities\keywordbids\KeywordBidsSelectionCriteria;
use api\enums\keywordbids\ServingStatusEnum;
use perf2k2\direct\api\entities\keywordbids\KeywordBidSetItem;
use perf2k2\direct\api\enums\bid\BidFieldEnum;
use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\KeywordBids;
use perf2k2\direct\transport\Response;

class KeywordBidsTest extends BaseTestCase {
    
    public function testGet()
    {
        $method = KeywordBids::get()
            ->setSelectionCriteria(
                (new KeywordBidsSelectionCriteria())
                    ->setKeywordIds([])
                    ->setServingStatuses([ServingStatusEnum::ACCEPTED()])
            )
            ->setFieldNames([BidFieldEnum::Bid()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSet()
    {
        $method = KeywordBids::set()
            ->setKeywordBids([
                (new KeywordBidSetItem())
                    ->setKeywordId(1)
                    ->setStrategyPriority(PriorityEnum::HIGH())
            ]);

        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

}
