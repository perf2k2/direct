<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\ClientsGet;
use perf2k2\direct\api\services\ClientsService;
use perf2k2\direct\api\methods\ClientsUpdate;

class Clients
{
    public static function get(): ClientsGet
    {
        return (new ClientsService())->getGetMethod();
    }

    public static function update(): ClientsUpdate
    {
        return (new ClientsService())->getUpdateMethod();
    }
}