<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\AdsGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;
use perf2k2\direct\http\Response;

class Ads
{
    public static function get(Connector $connection, AdsGetParams $params): Response
    {
        return $connection->request(Service::$Ads, Method::$get, $params);
    }
}