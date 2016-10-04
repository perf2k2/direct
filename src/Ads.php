<?php

namespace perf2k2\direct;

use perf2k2\direct\api\components\Service;
use perf2k2\direct\api\params\AdsGetParams;
use perf2k2\direct\http\Response;

class Ads extends Service
{
    public static function get(AdsGetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}