<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;
use perf2k2\direct\http\Response;

class Campaigns
{
    public static function get(Connector $connection, CampaignsGetParams $params): Response
    {
        return $connection->send(
            new Request($connection, Services::$Campaigns, Methods::$get, $params)
        );
    }
}