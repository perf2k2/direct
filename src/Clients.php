<?php

namespace direct;

use direct\api\methods\ClientsGet;
use direct\api\services\ClientsService;
use direct\api\methods\ClientsUpdate;

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