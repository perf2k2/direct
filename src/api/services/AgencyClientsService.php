<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\AgencyClientsAdd;
use direct\api\methods\AgencyClientsGet;
use direct\api\methods\AgencyClientsUpdate;

class AgencyClientsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'agencyclients';
    }
    
    public function get(): AgencyClientsGet
    {
        return new AgencyClientsGet($this);
    }
    
    public function update(): AgencyClientsUpdate
    {
        return new AgencyClientsUpdate($this);
    }
    
    public function add(): AgencyClientsAdd
    {
        return new AgencyClientsAdd($this);
    }
}