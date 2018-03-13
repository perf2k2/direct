<?php

namespace direct\tests\integration;

use direct\api\entities\keywords\KeywordAddItem;
use direct\api\entities\IdsCriteria;
use direct\api\entities\keywords\KeywordsSelectionCriteria;
use direct\api\entities\keywords\KeywordUpdateItem;
use direct\api\enums\keyword\KeywordFieldEnum;
use direct\api\enums\PriorityEnum;
use direct\http\Response;
use direct\Keywords;
use direct\tests\stubs\FakeConnection;

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
            ->setKeywords([
                (new KeywordAddItem('keyword', 1))
                    ->setBid(1000000)
                    ->setContextBid(1000000)
                    ->setStrategyPriority(PriorityEnum::LOW)
                    ->setUserParam1('param1')
                    ->setUserParam2('param2')
            ])
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
            ->setKeywords([
                (new KeywordUpdateItem(1))
                    ->setKeyword('keywords')
                    ->setUserParam1('param1')
                    ->setUserParam2('param2')
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
