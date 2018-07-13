<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\bids\BidSetItem;
use perf2k2\direct\api\entities\bids\BidsSelectionCriteria;
use perf2k2\direct\api\enums\bid\BidFieldEnum;
use perf2k2\direct\Bids;
use perf2k2\direct\transport\Response;

class BidsTest extends BaseTestCase {
    
    public function testGet()
    {
        $method = Bids::get()
            ->setSelectionCriteria(
                (new BidsSelectionCriteria())
                    ->setKeywordIds([])
            )
            ->setFieldNames([BidFieldEnum::Bid()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSet()
    {
        $method = Bids::set()
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(1)
                    ->setBid(1)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSetAuto()
    {
        $method = Bids::setAuto()
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(1)
                    ->setBid(1)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
