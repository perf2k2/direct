<?php

namespace direct\tests\integration;

use direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use direct\api\enums\keywordsresearch\HasSearchVolumeFieldEnum;
use direct\http\Response;
use direct\KeywordsResearch;
use direct\tests\stubs\FakeConnection;

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
                HasSearchVolumeFieldEnum::Desktops(),
                HasSearchVolumeFieldEnum::AllDevices(),
                HasSearchVolumeFieldEnum::Tablets(),
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}