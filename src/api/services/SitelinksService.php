<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\SitelinksAdd;
use direct\api\methods\SitelinksGet;

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