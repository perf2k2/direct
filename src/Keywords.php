<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\KeywordsGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;
use perf2k2\direct\http\Response;

class Keywords
{
    public static function get(Connector $connection, KeywordsGetParams $params): Response
    {
        return $connection->request(Service::Keywords, Method::get, $params);
    }
}