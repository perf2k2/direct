<?php

namespace perf2k2\direct;

use perf2k2\direct\api\components\Service;
use perf2k2\direct\api\params\BidsGetParams;
use perf2k2\direct\api\params\BidsSetParams;
use perf2k2\direct\http\Response;

class Bids extends Service
{
    public static function get(BidsGetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function set(BidsSetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}