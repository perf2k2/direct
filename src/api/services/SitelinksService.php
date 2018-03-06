<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\SitelinksAdd;
use perf2k2\direct\api\methods\SitelinksGet;

class SitelinksService extends AbstractService
{
    public function getApiName(): string
    {
        return 'sitelinks';
    }
    
    public function add(): SitelinksAdd
    {
        return new SitelinksAdd($this);
    }
    
    public function get(): SitelinksGet
    {
        return new SitelinksGet($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}