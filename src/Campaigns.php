<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;
use perf2k2\direct\http\Response;

class Campaigns
{
    public static function get(Connector $connection, CampaignsGetParams $params): Response
    {
        return $connection->request(Service::$Campaigns, Method::$get, $params);
    }
}