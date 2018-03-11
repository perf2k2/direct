<?php

namespace direct;

use direct\api\services\AgencyClientsService;
use direct\api\methods\AgencyClientsAdd;
use direct\api\methods\AgencyClientsGet;
use direct\api\methods\AgencyClientsUpdate;

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