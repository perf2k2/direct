<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\AgencyClientsAdd;
use perf2k2\direct\api\methods\AgencyClientsGet;
use perf2k2\direct\api\methods\AgencyClientsUpdate;

class AgencyClientsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'agencyclients';
    }
    
    public function getGetMethod(): AgencyClientsGet
    {
        return new AgencyClientsGet($this);
    }
    
    public function getUpdateMethod(): AgencyClientsUpdate
    {
        return new AgencyClientsUpdate($this);
    }
    
    public function getAddMethod(): AgencyClientsAdd
    {
        return new AgencyClientsAdd($this);
    }
}