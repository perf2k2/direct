<?php

namespace direct\tests\integration;

use direct\api\entities\bids\BidSetItem;
use direct\api\entities\bids\BidsSelectionCriteria;
use direct\api\enums\bid\BidFieldEnum;
use direct\Bids;
use direct\transport\Response;

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
