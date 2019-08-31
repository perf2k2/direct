<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\SitelinksAdd;
use perf2k2\direct\api\methods\SitelinksGet;

class SitelinksService extends AbstractService
{
    public function getApiName(): string
    {
        return 'sitelinks';
    }
    
    public function getAddMethod(): SitelinksAdd
    {
        return new SitelinksAdd($this);
    }
    
    public function getGetMethod(): SitelinksGet
    {
        return new SitelinksGet($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}