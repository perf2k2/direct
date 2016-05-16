<?php

namespace perf2k2\direct\v5\services;

use perf2k2\direct\v5\Connection;
use perf2k2\direct\v5\params\CampaignsGetParams;
use perf2k2\direct\v5\Request;

class Campaigns extends Base
{
    const SERVICE_NAME = 'campaigns';

    public static function get(Connection $connection, CampaignsGetParams $params): array
    {
        $response = $connection->send(
            new Request(self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Campaigns');
    }
}