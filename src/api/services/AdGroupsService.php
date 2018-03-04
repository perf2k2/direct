<?php

namespace api\services;

use api\AbstractService;
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
    
    public function add(): AdGroupsAdd
    {
        return new AdGroupsAdd($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): AdGroupsGet
    {
        return new AdGroupsGet($this);
    }
    
    public function update(): AdGroupsUpdate
    {
        return new AdGroupsUpdate($this);
    }
}