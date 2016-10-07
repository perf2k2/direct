<?php

namespace perf2k2\direct;

use perf2k2\direct\api\Service;
use perf2k2\direct\api\params\SitelinksAddParams;
use perf2k2\direct\api\params\SitelinksDeleteParams;
use perf2k2\direct\api\params\SitelinksGetParams;
use perf2k2\direct\http\Connection;
use perf2k2\direct\http\Response;

class Sitelinks extends Service
{
    public static function add(SitelinksAddParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function get(SitelinksGetParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function delete(SitelinksDeleteParams $params, Connection $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}