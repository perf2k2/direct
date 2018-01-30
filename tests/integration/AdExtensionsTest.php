<?php

namespace perf2k2\direct\tests\integration;

use api\entities\adextensions\AdExtensionAddItem;
use api\entities\adextensions\Callout;
use perf2k2\direct\AdExtensions;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

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
