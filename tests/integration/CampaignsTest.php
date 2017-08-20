<?php

namespace perf2k2\direct\tests\integration;

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

    public function testAdd()
    {
        $response = Campaigns::add()
            ->setCampaigns([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testArchive()
    {
        $response = Campaigns::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = Campaigns::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = Campaigns::get()
            ->setSelectionCriteria((new CampaignsSelectionCriteria()))
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name, CampaignFieldEnum::State])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testResume()
    {
        $response = Campaigns::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSuspend()
    {
        $response = Campaigns::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUnarchive()
    {
        $response = Campaigns::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUpdate()
    {
        $response = Campaigns::update()
            ->setCampaigns([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
