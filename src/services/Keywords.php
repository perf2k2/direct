<?php

namespace perf2k2\direct\v5\services;

use perf2k2\direct\v5\Connection;
use perf2k2\direct\v5\params\KeywordsGetParams;
use perf2k2\direct\v5\Request;

class Keywords extends Base
{
    const SERVICE_NAME = 'keywords';

    public static function get(Connection $connection, KeywordsGetParams $params): array
    {
        $response = $connection->send(
            new Request(self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Keywords');
    }
}