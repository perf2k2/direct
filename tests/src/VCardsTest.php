<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\vcard\VCardFieldEnum;
use perf2k2\direct\http\Connection;

class VCardsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    const DEFAULT_VCARD = 181218;

    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = VCards::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_VCARD])
            )
            ->setFieldNames([VCardFieldEnum::CompanyName])
            ->sendRequest(self::$connection);
        
        $vCards = $response->getResult('VCards');

        $this->assertEquals('Sandbox company', $vCards[0]->CompanyName);
    }
}
