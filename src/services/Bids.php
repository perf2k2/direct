<?php

namespace perf2k2\direct\v5\services;

use perf2k2\direct\v5\Connection;
use perf2k2\direct\v5\params\BidsGetParams;
use perf2k2\direct\v5\Request;

class Bids extends Base
{
    const SERVICE_NAME = 'bids';

    public static function get(Connection $connection, BidsGetParams $params): array
    {
        $response = $connection->send(
            new Request(self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Bids');
    }
}