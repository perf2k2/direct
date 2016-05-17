<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\BidsGetParams;
use perf2k2\direct\v5\params\BidsSetParams;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\http\Response;

class Bids extends Base
{
    const SERVICE_NAME = 'bids';

    public static function get(Connector $connection, BidsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Bids');
    }

    public static function set(Connector $connection, BidsSetParams $params): Response
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_SET_METHOD, $params)
        );

        return $response;
    }
}