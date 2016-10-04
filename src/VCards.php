<?php

namespace perf2k2\direct;

use perf2k2\direct\api\components\Service;
use perf2k2\direct\api\params\VCardsGetParams;
use perf2k2\direct\http\Response;

class VCards extends Service
{
    public static function get(VCardsGetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}