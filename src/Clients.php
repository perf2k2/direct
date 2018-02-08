<?php

namespace perf2k2\direct;

use api\methods\ClientsGet;

class Clients
{
    public static function getApiName(): string
    {
        return 'clients';
    }

    public static function get(): ClientsGet
    {
        return new ClientsGet(self::getApiName());
    }
}