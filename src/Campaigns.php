<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;

class Campaigns
{
    public static function get(Connector $connection, CampaignsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, Services::$Campaigns, Methods::$get, $params)
        );

        return $response->getResult('Campaigns');
    }
}