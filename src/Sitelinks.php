<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\SitelinksAdd;
use perf2k2\direct\api\methods\SitelinksDelete;
use perf2k2\direct\api\methods\SitelinksGet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Sitelinks extends Service implements ServiceInterface
{
    protected $apiName = 'sitelinks';

    public static function add(): SitelinksAdd
    {
        return new SitelinksAdd((new self())->getApiName());
    }

    public static function get(): SitelinksGet
    {
        return new SitelinksGet((new self())->getApiName());
    }

    public static function delete(): SitelinksDelete
    {
        return new SitelinksDelete((new self())->getApiName());
    }
}