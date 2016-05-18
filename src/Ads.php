<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\AdsGetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;
use perf2k2\direct\http\Response;

class Ads
{
    public static function get(Connector $connection, AdsGetParams $params): Response
    {
        return $connection->send(
            new Request($connection, Services::$Ads, Methods::$get, $params)
        );
    }
}