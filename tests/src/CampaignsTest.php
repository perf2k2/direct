<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\api\params\CampaignsGetParams;

class CampaignsTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    const DEFAULT_CAMPAIGN = 157728;

    public function setUp()
    {
        $this->connection = new Connector(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Campaigns::get($this->connection, (new CampaignsGetParams())
            ->setSelectionCriteria((new CampaignsSelectionCriteria()))
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name])
        );

        $campaigns = $response->getResult('Campaigns');

        $this->assertEquals(self::DEFAULT_CAMPAIGN, $campaigns[0]->Id);
    }
}
