<?php

namespace api\services;

use api\AbstractService;
use api\methods\AdExtensionsGet;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdExtensionsAdd;

class AdExtensionsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'adextensions';
    }
    
    public function add(): AdExtensionsAdd
    {
        return new AdExtensionsAdd($this);
    }
    
    public function get(): AdExtensionsGet
    {
        return new AdExtensionsGet($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}