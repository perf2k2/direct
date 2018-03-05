<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\SitelinksAdd;
use perf2k2\direct\api\methods\SitelinksGet;

class Sitelinks
{
    public function getApiName(): string
    {
        return 'sitelinks';
    }

    public static function add(): SitelinksAdd
    {
        return new SitelinksAdd(self::getApiName());
    }

    public static function get(): SitelinksGet
    {
        return new SitelinksGet(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }
}