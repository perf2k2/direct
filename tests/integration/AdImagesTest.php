<?php

namespace perf2k2\direct\tests\integration;

use api\entities\adimages\AdImageAddItem;
use api\entities\adimages\AdImageIdsCriteria;
use api\entities\adimages\AdImageSelectionCriteria;
use perf2k2\direct\AdImages;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

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
