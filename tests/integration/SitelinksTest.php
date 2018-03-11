<?php

namespace direct\tests\integration;

use direct\api\entities\IdsCriteria;
use direct\api\entities\sitelinks\SitelinksSetAddItem;
use direct\api\enums\sitelinks\SitelinksSetFieldEnum;
use direct\http\Response;
use direct\Sitelinks;
use direct\tests\stubs\FakeConnection;

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
