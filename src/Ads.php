<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\AdsGetParams;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\dictionaries\Methods;
use perf2k2\direct\v5\dictionaries\Services;

class Ads
{
    public static function get(Connector $connection, AdsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, Services::$Ads, Methods::$get, $params)
        );

        return $response->getResult('Ads');
    }
}