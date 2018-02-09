<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AgencyClientsGet;

class AgencyClients
{
    public static function getApiName(): string
    {
        return 'agencyclients';
    }

    public static function get(): AgencyClientsGet
    {
        return new AgencyClientsGet(self::getApiName());
    }
}