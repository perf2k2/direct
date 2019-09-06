<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdGroupsAdd;
use perf2k2\direct\api\methods\AdGroupsGet;
use perf2k2\direct\api\methods\AdGroupsUpdate;

class AdGroupsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'adgroups';
    }
    
    public function getAddMethod(): AdGroupsAdd
    {
        return new AdGroupsAdd($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): AdGroupsGet
    {
        return new AdGroupsGet($this);
    }
    
    public function getUpdateMethod(): AdGroupsUpdate
    {
        return new AdGroupsUpdate($this);
    }
}