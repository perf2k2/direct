<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\IdsCriteria;
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

    public function testAdd()
    {
        $response = Keywords::add()
            ->setKeywords([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = Keywords::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = Keywords::get()
            ->setSelectionCriteria((new KeywordsSelectionCriteria())
                ->setCampaignIds([])
            )
            ->setFieldNames([KeywordFieldEnum::Id, KeywordFieldEnum::Keyword])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testResume()
    {
        $response = Keywords::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSuspend()
    {
        $response = Keywords::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUpdate()
    {
        $response = Keywords::update()
            ->setKeywords([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
