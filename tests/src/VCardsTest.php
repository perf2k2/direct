<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\vcard\VCardFieldEnum;
use perf2k2\direct\http\Connection;

class VCardsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_VCARD = 181218;

    public function setUp()
    {
        $this->connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = VCards::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_VCARD])
            )
            ->setFieldNames([VCardFieldEnum::CompanyName])
            ->sendRequest($this->connection);
        
        $vCards = $response->getResult('VCards');

        $this->assertEquals('Sandbox company', $vCards[0]->CompanyName);
    }
}
