<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\AdExtensionsGet;
use direct\api\DeleteMethod;
use direct\api\methods\AdExtensionsAdd;

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