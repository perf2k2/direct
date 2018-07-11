<?php

namespace direct\tests\integration;

use direct\api\entities\adextensions\AdExtensionAddItem;
use direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use direct\api\entities\adextensions\Callout;
use direct\api\enums\adextensions\AdExtensionStateSelectionEnum;
use direct\api\enums\adextensions\AdExtensionTypeEnum;
use direct\api\enums\adextensions\ExtensionStatusSelectionEnum;
use direct\AdExtensions;
use direct\api\entities\IdsCriteria;
use direct\api\entities\LimitOffset;
use direct\transport\Response;

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
