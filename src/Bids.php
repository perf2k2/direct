<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\BidsGetParams;
use perf2k2\direct\api\params\BidsSetParams;
use perf2k2\direct\http\Response;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;

class Bids
{
    public static function get(Connector $connection, BidsGetParams $params): Response
    {
        return $connection->request(Service::Bids, Method::get, $params);
    }

    public static function set(Connector $connection, BidsSetParams $params): Response
    {
        return $connection->request(Service::Bids, Method::set, $params);
    }
}