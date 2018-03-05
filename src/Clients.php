<?php

namespace perf2k2\direct;

use api\methods\ClientsGet;
use perf2k2\direct\api\methods\ClientsUpdate;

class Clients
{
    public function getApiName(): string
    {
        return 'clients';
    }

    public static function get(): ClientsGet
    {
        return new ClientsGet(self::getApiName());
    }

    public static function update(): ClientsUpdate
    {
        return new ClientsUpdate(self::getApiName());
    }
}