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
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class AdExtensionsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }
    
    public function testAdd()
    {
        $response = AdExtensions::add()
            ->setAdExtensions([
                new AdExtensionAddItem(new Callout('text'))
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testGet()
    {
        $response = AdExtensions::get()
            ->setSelectionCriteria(
                (new AdExtensionsSelectionCriteria())
                    ->setIds([1])
                    ->setStates([AdExtensionStateSelectionEnum::DELETED()])
                    ->setStatuses([ExtensionStatusSelectionEnum::ACCEPTED()])
                    ->setTypes([AdExtensionTypeEnum::CALLOUT()])
                    ->setModifiedSince(date(\DateTime::ISO8601))
            )
            ->setFieldNames(['Id', 'Id'])
            ->setCalloutFieldNames(['CalloutText'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE))
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testDelete()
    {
        $response = AdExtensions::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
