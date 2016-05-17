<?php

namespace perf2k2\direct\v5\services;

use perf2k2\direct\v5\Connection;
use perf2k2\direct\v5\params\AdsGetParams;
use perf2k2\direct\v5\Request;

class Ads extends Base
{
    const SERVICE_NAME = 'ads';

    public static function get(Connection $connection, AdsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Ads');
    }
}