<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;
use perf2k2\direct\api\enums\keyword\KeywordFieldEnum;
use perf2k2\direct\api\params\KeywordsGetParams;
use perf2k2\direct\http\Connection;

class KeywordsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_KEYWORD = 3894729;

    public function setUp()
    {
        $this->connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Keywords::get((new KeywordsGetParams())
            ->setSelectionCriteria(
                (new KeywordsSelectionCriteria())
                    ->setCampaignIds([CampaignsTest::DEFAULT_CAMPAIGN])
            )
            ->setFieldNames([KeywordFieldEnum::Id, KeywordFieldEnum::Keyword]), $this->connection);

        $keywords = $response->getResult('Keywords');

        $this->assertEquals(self::DEFAULT_KEYWORD, $keywords[0]->Id);
    }
}
