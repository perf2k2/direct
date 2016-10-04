<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\SitelinksAddParams;
use perf2k2\direct\api\params\SitelinksDeleteParams;
use perf2k2\direct\api\params\SitelinksGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;
use perf2k2\direct\http\Response;

class Sitelinks
{
    public static function add(Connector $connection, SitelinksAddParams $params): Response
    {
        return $connection->request(Service::Sitelinks, Method::add, $params);
    }

    public static function get(Connector $connection, SitelinksGetParams $params): Response
    {
        return $connection->request(Service::Sitelinks, Method::get, $params);
    }

    public static function delete(Connector $connection, SitelinksDeleteParams $params): Response
    {
        return $connection->request(Service::Sitelinks, Method::delete, $params);
    }
}