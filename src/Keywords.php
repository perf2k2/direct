<?php

namespace perf2k2\direct;

use perf2k2\direct\api\components\Service;
use perf2k2\direct\api\params\KeywordsGetParams;
use perf2k2\direct\http\Response;

class Keywords extends Service
{
    public static function get(KeywordsGetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}