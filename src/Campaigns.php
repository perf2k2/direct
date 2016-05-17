<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\CampaignsGetParams;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\dictionaries\Methods;
use perf2k2\direct\v5\dictionaries\Services;

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