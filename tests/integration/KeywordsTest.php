<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\keywords\KeywordAddItem;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;
use perf2k2\direct\api\entities\keywords\KeywordUpdateItem;
use perf2k2\direct\api\enums\keyword\KeywordFieldEnum;
use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\transport\Response;
use perf2k2\direct\Keywords;

class KeywordsTest extends BaseTestCase {

    public function testAdd()
    {
        $method = Keywords::add()
            ->setKeywords([
                (new KeywordAddItem('keyword', 1))
                    ->setBid(1000000)
                    ->setContextBid(1000000)
                    ->setStrategyPriority(PriorityEnum::LOW)
                    ->setUserParam1('param1')
                    ->setUserParam2('param2')
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = Keywords::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = Keywords::get()
            ->setSelectionCriteria((new KeywordsSelectionCriteria())
                ->setCampaignIds([])
            )
            ->setFieldNames([KeywordFieldEnum::Id(), KeywordFieldEnum::Keyword()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testResume()
    {
        $method = Keywords::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSuspend()
    {
        $method = Keywords::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUpdate()
    {
        $method = Keywords::update()
            ->setKeywords([
                (new KeywordUpdateItem(1))
                    ->setKeyword('keywords')
                    ->setUserParam1('param1')
                    ->setUserParam2('param2')
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
