<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\KeywordsGetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;
use perf2k2\direct\http\Response;

class Keywords
{
    public static function get(Connector $connection, KeywordsGetParams $params): Response
    {
        return $connection->send(
            new Request($connection, Services::$Keywords, Methods::$get, $params)
        );
    }
}