<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\BidsGetParams;
use perf2k2\direct\v5\params\BidsSetParams;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\http\Response;
use perf2k2\direct\v5\dictionaries\Methods;
use perf2k2\direct\v5\dictionaries\Services;

class Bids
{
    public static function get(Connector $connection, BidsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, Services::$Bids, Methods::$get, $params)
        );

        return $response->getResult('Bids');
    }

    public static function set(Connector $connection, BidsSetParams $params): Response
    {
        $response = $connection->send(
            new Request($connection, Services::$Bids, Methods::$set, $params)
        );

        return $response;
    }
}