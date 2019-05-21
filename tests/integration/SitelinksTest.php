<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\sitelinks\SitelinksSetAddItem;
use perf2k2\direct\api\enums\sitelinks\SitelinksSetFieldEnum;
use perf2k2\direct\transport\Response;
use perf2k2\direct\facades\Sitelinks;

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
