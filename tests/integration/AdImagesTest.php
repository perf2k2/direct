<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\adimages\AdImageAddItem;
use perf2k2\direct\api\entities\adimages\AdImageIdsCriteria;
use perf2k2\direct\api\entities\adimages\AdImageSelectionCriteria;
use perf2k2\direct\AdImages;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\transport\Response;

class AdImagesTest extends BaseTestCase
{
    public function testAdd()
    {
        $method = AdImages::add()
            ->setAdImages([
                new AdImageAddItem('base64Binary', 'name')
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = AdImages::delete()
            ->setSelectionCriteria(new AdImageIdsCriteria([1, 2]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = AdImages::get()
            ->setSelectionCriteria(
                (new AdImageSelectionCriteria())
                    ->setAdImageHashes(['hash'])
                    ->setAssociated(YesNoEnum::YES)
            )
            ->setFieldNames(['field'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
