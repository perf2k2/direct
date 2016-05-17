<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\KeywordsGetParams;
use perf2k2\direct\v5\http\Request;
use perf2k2\direct\v5\dictionaries\Methods;
use perf2k2\direct\v5\dictionaries\Services;

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