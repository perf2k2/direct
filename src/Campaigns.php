<?php

namespace perf2k2\direct;

use perf2k2\direct\api\Service;
use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Response;

class Campaigns extends Service
{
    const LIMIT_GET_RETURN = 10000;
    
    public static function get(CampaignsGetParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}