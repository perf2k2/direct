<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\sitelinks\SitelinksSetAddItem;
use perf2k2\direct\api\enums\sitelinks\SitelinksSetFieldEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\Sitelinks;
use perf2k2\direct\tests\stubs\FakeConnection;

class SitelinksTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = Sitelinks::add()
            ->setSitelinksSets([
                (new SitelinksSetAddItem())
                    ->setSiteLinks([]),
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = Sitelinks::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->setFieldNames([SitelinksSetFieldEnum::Sitelinks])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = Sitelinks::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
