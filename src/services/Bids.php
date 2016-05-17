<?php

namespace perf2k2\direct\v5\services;

use perf2k2\direct\v5\Connection;
use perf2k2\direct\v5\params\BidsGetParams;
use perf2k2\direct\v5\params\BidsSetParams;
use perf2k2\direct\v5\Request;
use perf2k2\direct\v5\Response;

class Bids extends Base
{
    const SERVICE_NAME = 'bids';

    public static function get(Connection $connection, BidsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Bids');
    }

    public static function set(Connection $connection, BidsSetParams $params): Response
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_SET_METHOD, $params)
        );

        return $response;
    }
}