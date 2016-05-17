<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\CampaignsGetParams;
use perf2k2\direct\v5\http\Request;

class Campaigns extends Base
{
    const SERVICE_NAME = 'campaigns';

    public static function get(Connector $connection, CampaignsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Campaigns');
    }
}