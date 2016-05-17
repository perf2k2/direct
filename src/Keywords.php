<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\KeywordsGetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;

class Keywords
{
    public static function get(Connector $connection, KeywordsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, Services::$Keywords, Methods::$get, $params)
        );

        return $response->getResult('Keywords');
    }
}