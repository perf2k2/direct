<?php

namespace perf2k2\direct;

use api\methods\ClientsGet;
use api\services\ClientsService;
use perf2k2\direct\api\methods\ClientsUpdate;

class Clients
{
    public static function get(): ClientsGet
    {
        return (new ClientsService())->get();
    }

    public static function update(): ClientsUpdate
    {
        return (new ClientsService())->update();
    }
}