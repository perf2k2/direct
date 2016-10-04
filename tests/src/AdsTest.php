<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\ad\TextAdFieldEnum;
use perf2k2\direct\api\params\AdsGetParams;

class AdsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_AD = 1567104;

    public function setUp()
    {
        $this->connection = new Connector(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Ads::get($this->connection, (new AdsGetParams())
            ->setSelectionCriteria(
                (new AdsSelectionCriteria())
                    ->setCampaignIds([CampaignsTest::DEFAULT_CAMPAIGN])
            )
            ->setFieldNames([AdFieldEnum::Id])
            ->setTextAdFieldNames([TextAdFieldEnum::VCardId])
        );
        
        $ads = $response->getResult('Ads');

        $this->assertEquals(self::DEFAULT_AD, $ads[0]->Id);
    }
}
