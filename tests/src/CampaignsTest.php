<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\http\Connection;

class CampaignsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    const DEFAULT_CAMPAIGN = 157728;

    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Campaigns::get()
            ->setSelectionCriteria((new CampaignsSelectionCriteria()))
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name, CampaignFieldEnum::State])
            ->sendRequest(self::$connection);

        $campaigns = $response->getResult('Campaigns');

        $this->assertEquals(self::DEFAULT_CAMPAIGN, $campaigns[0]->Id);
    }

    public function testUnarchive()
    {
        $response = Campaigns::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_CAMPAIGN])
            )
            ->sendRequest(self::$connection);

        $campaigns = $response->getResult('UnarchiveResults');

        $this->assertEquals(self::DEFAULT_CAMPAIGN, $campaigns[0]->Id);
    }

    public function testArchive()
    {
        $response = Campaigns::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([self::DEFAULT_CAMPAIGN])
            )
            ->sendRequest(self::$connection);

        $campaigns = $response->getResult('ArchiveResults');

        $this->assertEquals(self::DEFAULT_CAMPAIGN, $campaigns[0]->Id);
    }
}
