<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\ClientsGet;
use direct\api\methods\ClientsUpdate;

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