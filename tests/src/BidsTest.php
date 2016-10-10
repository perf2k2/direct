<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\bids\BidSetItem;
use perf2k2\direct\api\entities\bids\BidsSelectionCriteria;
use perf2k2\direct\api\enums\bid\BidFieldEnum;
use perf2k2\direct\http\Connection;

class BidsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_BID = 10000;

    public function setUp()
    {
        $this->connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Bids::get()
            ->setSelectionCriteria(
                (new BidsSelectionCriteria())
                    ->setKeywordIds([KeywordsTest::DEFAULT_KEYWORD])
            )
            ->setFieldNames([BidFieldEnum::Bid])
            ->sendRequest($this->connection);

        $bids = $response->getResult('Bids');

        $this->assertEquals(self::DEFAULT_BID, $bids[0]->Bid);
    }

    public function testSet()
    {
        $response = Bids::set()
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(KeywordsTest::DEFAULT_KEYWORD)
                    ->setBid(self::DEFAULT_BID)
            ])
            ->sendRequest($this->connection);

        $result = $response->getResult('SetResults');

        $this->assertEquals(KeywordsTest::DEFAULT_KEYWORD, $result[0]->KeywordId);
        $this->assertFalse(isset($result[0]->Warnings));
        $this->assertFalse(isset($result[0]->Errors));
    }
}
