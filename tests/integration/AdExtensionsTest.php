<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\adextensions\AdExtensionAddItem;
use perf2k2\direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use perf2k2\direct\api\entities\adextensions\Callout;
use perf2k2\direct\api\enums\adextensions\AdExtensionStateSelectionEnum;
use perf2k2\direct\api\enums\adextensions\AdExtensionTypeEnum;
use perf2k2\direct\api\enums\adextensions\ExtensionStatusSelectionEnum;
use perf2k2\direct\AdExtensions;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\transport\Response;

class AdExtensionsTest extends BaseTestCase
{
    public function testAdd()
    {
        $method = AdExtensions::add()
            ->setAdExtensions([
                new AdExtensionAddItem(new Callout('text'))
            ]);
        
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testGet()
    {
        $method = AdExtensions::get()
            ->setSelectionCriteria(
                (new AdExtensionsSelectionCriteria())
                    ->setIds([1])
                    ->setStates([AdExtensionStateSelectionEnum::DELETED()])
                    ->setStatuses([ExtensionStatusSelectionEnum::ACCEPTED()])
                    ->setTypes([AdExtensionTypeEnum::CALLOUT()])
                    ->setModifiedSince(date(\DateTime::ATOM))
            )
            ->setFieldNames(['Id', 'Id'])
            ->setCalloutFieldNames(['CalloutText'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testDelete()
    {
        $method = AdExtensions::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
