<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\enums\dictionaries\DictionaryNameEnum;
use perf2k2\direct\facades\Dictionaries;
use perf2k2\direct\transport\Response;

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
