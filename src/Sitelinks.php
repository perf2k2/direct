<?php

namespace perf2k2\direct;

use perf2k2\direct\api\components\Service;
use perf2k2\direct\api\params\SitelinksAddParams;
use perf2k2\direct\api\params\SitelinksDeleteParams;
use perf2k2\direct\api\params\SitelinksGetParams;
use perf2k2\direct\http\Response;

class Sitelinks extends Service
{
    public static function add(SitelinksAddParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function get(SitelinksGetParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }

    public static function delete(SitelinksDeleteParams $params, $connection = null): Response
    {
        return (new self($connection))->runMethod(__FUNCTION__, $params);
    }
}