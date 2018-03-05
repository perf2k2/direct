<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\methods\AgencyClientsAdd;
use perf2k2\direct\api\methods\AgencyClientsGet;
use perf2k2\direct\api\methods\AgencyClientsUpdate;

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