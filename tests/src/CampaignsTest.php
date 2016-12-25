<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\Campaigns;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class CampaignsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Campaigns::get()
            ->setSelectionCriteria((new CampaignsSelectionCriteria()))
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name, CampaignFieldEnum::State])
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUnarchive()
    {
        $response = Campaigns::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testArchive()
    {
        $response = Campaigns::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->sendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
