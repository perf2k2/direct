<?php

namespace direct\tests\integration;

use direct\api\entities\IdsCriteria;
use direct\api\entities\sitelinks\SitelinksSetAddItem;
use direct\api\enums\sitelinks\SitelinksSetFieldEnum;
use direct\transport\Response;
use direct\Sitelinks;

class SitelinksTest extends BaseTestCase {

    public function testAdd()
    {
        $method = Sitelinks::add()
            ->setSitelinksSets([
                (new SitelinksSetAddItem())
                    ->setSiteLinks([]),
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = Sitelinks::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->setFieldNames([SitelinksSetFieldEnum::Sitelinks()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = Sitelinks::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
