<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\bids\BidSetItem;
use perf2k2\direct\api\entities\bids\BidsSelectionCriteria;
use perf2k2\direct\api\enums\bid\BidFieldEnum;
use perf2k2\direct\api\params\BidsGetParams;
use perf2k2\direct\api\params\BidsSetParams;

class BidsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_BID = 10000;

    public function setUp()
    {
        $this->connection = new Connector(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Bids::get($this->connection, (new BidsGetParams())
            ->setSelectionCriteria(
                (new BidsSelectionCriteria())
                    ->setKeywordIds([KeywordsTest::DEFAULT_KEYWORD])
            )
            ->setFieldNames([BidFieldEnum::Bid])
        );

        $bids = $response->getResult('Bids');

        $this->assertEquals(self::DEFAULT_BID, $bids[0]->Bid);
    }

    public function testSet()
    {
        $response = Bids::set($this->connection, (new BidsSetParams())
            ->setBids([
                (new BidSetItem())
                    ->setKeywordId(KeywordsTest::DEFAULT_KEYWORD)
                    ->setBid(self::DEFAULT_BID)
            ]));

        $result = $response->getResult('SetResults');

        $this->assertEquals(KeywordsTest::DEFAULT_KEYWORD, $result[0]->KeywordId);
        $this->assertFalse(isset($result[0]->Warnings));
        $this->assertFalse(isset($result[0]->Errors));
    }
}
