<?php

namespace perf2k2\direct;

use perf2k2\direct\api\Service;
use perf2k2\direct\api\params\BidsGetParams;
use perf2k2\direct\api\params\BidsSetParams;
use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Response;

class Bids extends Service
{
    public static function get(BidsGetParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function set(BidsSetParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}