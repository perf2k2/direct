<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\AdExtensionsGet;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdExtensionsAdd;

class AdExtensionsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'adextensions';
    }
    
    public function getAddMethod(): AdExtensionsAdd
    {
        return new AdExtensionsAdd($this);
    }
    
    public function getGetMethod(): AdExtensionsGet
    {
        return new AdExtensionsGet($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}