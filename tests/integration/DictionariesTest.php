<?php

namespace direct\tests\integration;

use direct\api\enums\dictionaries\DictionaryNameEnum;
use direct\Dictionaries;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

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
                DictionaryNameEnum::Constants(),
                DictionaryNameEnum::Interests(),
                DictionaryNameEnum::OperationSystemVersions(),
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}
