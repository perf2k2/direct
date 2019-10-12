<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\adextensions\AdExtensionAddItem;
use perf2k2\direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use perf2k2\direct\api\entities\adextensions\Callout;
use perf2k2\direct\api\enums\adextensions\AdExtensionFieldEnum;
use perf2k2\direct\api\enums\adextensions\AdExtensionStateSelectionEnum;
use perf2k2\direct\api\enums\adextensions\AdExtensionTypeEnum;
use perf2k2\direct\api\enums\adextensions\CalloutFieldEnum;
use perf2k2\direct\api\enums\adextensions\ExtensionStatusSelectionEnum;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\transport\Response;

class AdExtensionsTest extends BaseTestCase
{
    public function testAdd()
    {
        $method = self::$client->getAdExtensionsService()->getAddMethod()
            ->setAdExtensions([
                (new AdExtensionAddItem())
                    ->setCallout(new Callout())
            ]);
        
        $this->assertSame(1, self::$client->process($method)->getResult('AddResults')[0]->Id);
    }
    
    public function testGet()
    {
        $method = self::$client->getAdExtensionsService()
            ->getGetMethod()
            ->setSelectionCriteria(
                (new AdExtensionsSelectionCriteria())
                    ->setIds([1])
                    ->setStates([AdExtensionStateSelectionEnum::DELETED()])
                    ->setStatuses([ExtensionStatusSelectionEnum::ACCEPTED()])
                    ->setTypes([AdExtensionTypeEnum::CALLOUT()])
                    ->setModifiedSince(date(\DateTime::ATOM))
            )
            ->setFieldNames([AdExtensionFieldEnum::Id(), AdExtensionFieldEnum::Type()])
            ->setCalloutFieldNames([CalloutFieldEnum::CalloutText()])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE));

        $this->assertInstanceOf(Response::class, self::$client->send($method));
    }
    
    public function testDelete()
    {
        $method = self::$client->getAdExtensionsService()
            ->getDeleteMethod()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );

        $this->assertInstanceOf(Response::class, self::$client->send($method));
    }
}
