<?php

namespace perf2k2\direct\tests\integration;

use api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use api\enums\keywordsresearch\HasSearchVolumeFieldEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\KeywordsResearch;
use perf2k2\direct\tests\stubs\FakeConnection;

class KeywordsResearchTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = KeywordsResearch::hasSearchVolume()
            ->setSelectionCriteria(
                new HasSearchVolumeSelectionCriteria(['keyword'], [1])
            )
            ->setFieldNames([
                HasSearchVolumeFieldEnum::Desktops,
                HasSearchVolumeFieldEnum::AllDevices,
                HasSearchVolumeFieldEnum::Tablets,
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}