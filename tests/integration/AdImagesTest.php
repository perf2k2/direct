<?php

namespace direct\tests\integration;

use direct\api\entities\adimages\AdImageAddItem;
use direct\api\entities\adimages\AdImageIdsCriteria;
use direct\api\entities\adimages\AdImageSelectionCriteria;
use direct\AdImages;
use direct\api\entities\LimitOffset;
use direct\api\enums\YesNoEnum;
use direct\transport\Response;

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
