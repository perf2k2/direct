<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\SitelinksService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\SitelinksAdd;
use perf2k2\direct\api\methods\SitelinksGet;

class Sitelinks
{
    public static function add(): SitelinksAdd
    {
        return (new SitelinksService())->getAddMethod();
    }

    public static function get(): SitelinksGet
    {
        return (new SitelinksService())->getGetMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new SitelinksService())->getDeleteMethod();
    }
}