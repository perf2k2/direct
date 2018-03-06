<?php

namespace api\services;

use api\AbstractService;
use api\methods\ClientsGet;
use perf2k2\direct\api\methods\ClientsUpdate;

class ClientsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'clients';
    }
    
    public function get(): ClientsGet
    {
        return new ClientsGet($this);
    }
    
    public function update(): ClientsUpdate
    {
        return new ClientsUpdate($this);
    }
}