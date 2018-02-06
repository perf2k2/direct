<?php

namespace perf2k2\direct\tests\integration;

use api\enums\dictionaries\DictionaryNameEnum;
use perf2k2\direct\Dictionaries;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class DictionariesTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;
    
    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }
    
    public function testGet()
    {
        $response = Dictionaries::get()
            ->setDictionaryNames([
                DictionaryNameEnum::Constants,
                DictionaryNameEnum::Interests,
                DictionaryNameEnum::OperationSystemVersions,
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}
