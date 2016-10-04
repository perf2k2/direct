<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\vcard\VCardFieldEnum;
use perf2k2\direct\api\params\VCardsGetParams;

class VCardsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_VCARD = 181218;

    public function setUp()
    {
        $this->connection = new Connector(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = VCards::get($this->connection, (new VCardsGetParams())
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_VCARD])
            )
            ->setFieldNames([VCardFieldEnum::CompanyName])
        );
        
        $vCards = $response->getResult('VCards');

        $this->assertEquals('Sandbox company', $vCards[0]->CompanyName);
    }
}
