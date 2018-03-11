<?php

namespace direct;

use direct\api\services\SitelinksService;
use direct\api\DeleteMethod;
use direct\api\methods\SitelinksAdd;
use direct\api\methods\SitelinksGet;

class Sitelinks
{
    public static function add(): SitelinksAdd
    {
        return (new SitelinksService())->add();
    }

    public static function get(): SitelinksGet
    {
        return (new SitelinksService())->get();
    }

    public static function delete(): DeleteMethod
    {
        return (new SitelinksService())->delete();
    }
}