<?php

namespace perf2k2\direct;

use api\services\AgencyClientsService;
use perf2k2\direct\api\methods\AgencyClientsAdd;
use perf2k2\direct\api\methods\AgencyClientsGet;
use perf2k2\direct\api\methods\AgencyClientsUpdate;

class AgencyClients
{
    public static function get(): AgencyClientsGet
    {
        return (new AgencyClientsService())->get();
    }
    
    public static function update(): AgencyClientsUpdate
    {
        return (new AgencyClientsService())->update();
    }
    
    public static function add(): AgencyClientsAdd
    {
        return (new AgencyClientsService())->add();
    }
}