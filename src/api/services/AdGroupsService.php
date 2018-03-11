<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\AdGroupsAdd;
use direct\api\methods\AdGroupsGet;
use direct\api\methods\AdGroupsUpdate;

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