<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\AgencyClientsService;
use perf2k2\direct\api\methods\AgencyClientsAdd;
use perf2k2\direct\api\methods\AgencyClientsGet;
use perf2k2\direct\api\methods\AgencyClientsUpdate;

class AgencyClients
{
    public static function get(): AgencyClientsGet
    {
        return (new AgencyClientsService())->getGetMethod();
    }
    
    public static function update(): AgencyClientsUpdate
    {
        return (new AgencyClientsService())->getUpdateMethod();
    }
    
    public static function add(): AgencyClientsAdd
    {
        return (new AgencyClientsService())->getAddMethod();
    }
}