<?php

namespace direct\tests\integration;

use direct\api\enums\dictionaries\DictionaryNameEnum;
use direct\Dictionaries;
use direct\transport\Response;

class DictionariesTest extends BaseTestCase {
    
    public function testGet()
    {
        $method = Dictionaries::get()
            ->setDictionaryNames([
                DictionaryNameEnum::Constants(),
                DictionaryNameEnum::Interests(),
                DictionaryNameEnum::OperationSystemVersions(),
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
