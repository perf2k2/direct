<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\ClientsGet;
use perf2k2\direct\api\methods\ClientsUpdate;

class ClientsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'clients';
    }
    
    public function getGetMethod(): ClientsGet
    {
        return new ClientsGet($this);
    }
    
    public function getUpdateMethod(): ClientsUpdate
    {
        return new ClientsUpdate($this);
    }
}