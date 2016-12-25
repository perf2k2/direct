<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;
use perf2k2\direct\api\enums\keyword\KeywordFieldEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\Keywords;
use perf2k2\direct\tests\stubs\FakeConnection;

class KeywordsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Keywords::get()
            ->setSelectionCriteria((new KeywordsSelectionCriteria())
                ->setCampaignIds([])
            )
            ->setFieldNames([KeywordFieldEnum::Id, KeywordFieldEnum::Keyword])
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
