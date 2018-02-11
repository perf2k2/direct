<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AgencyClientsGet;
use perf2k2\direct\api\methods\AgencyClientsUpdate;

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
    
    public static function update(): AgencyClientsUpdate
    {
        return new AgencyClientsUpdate(self::getApiName());
    }
}