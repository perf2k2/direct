<?php

namespace direct\tests\integration;

use direct\api\entities\adimages\AdImageAddItem;
use direct\api\entities\adimages\AdImageIdsCriteria;
use direct\api\entities\adimages\AdImageSelectionCriteria;
use direct\AdImages;
use direct\api\entities\LimitOffset;
use direct\api\enums\YesNoEnum;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class AdImagesTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = AdImages::add()
            ->setAdImages([
                new AdImageAddItem('base64Binary', 'name')
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = AdImages::delete()
            ->setSelectionCriteria(new AdImageIdsCriteria([1, 2]))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $response = AdImages::get()
            ->setSelectionCriteria(
                (new AdImageSelectionCriteria())
                    ->setAdImageHashes(['hash'])
                    ->setAssociated(YesNoEnum::YES)
            )
            ->setFieldNames(['field'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}
