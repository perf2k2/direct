<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\VCardsGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;
use perf2k2\direct\http\Response;

class VCards
{
    public static function get(Connector $connection, VCardsGetParams $params): Response
    {
        return $connection->request(Service::VCards, Method::get, $params);
    }
}