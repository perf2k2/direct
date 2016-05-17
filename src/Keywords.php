<?php

namespace perf2k2\direct\v5;

use perf2k2\direct\v5\params\KeywordsGetParams;
use perf2k2\direct\v5\http\Request;

class Keywords extends Base
{   
    const SERVICE_NAME = 'keywords';

    public static function get(Connector $connection, KeywordsGetParams $params): array
    {
        $response = $connection->send(
            new Request($connection, self::SERVICE_NAME, self::SERVICE_GET_METHOD, $params)
        );

        return $response->getResult('Keywords');
    }
}