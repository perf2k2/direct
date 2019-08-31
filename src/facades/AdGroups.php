<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\AdGroupsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdGroupsAdd;
use perf2k2\direct\api\methods\AdGroupsGet;
use perf2k2\direct\api\methods\AdGroupsUpdate;

class AdGroups
{
    public static function add(): AdGroupsAdd
    {
        return (new AdGroupsService())->getAddMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new AdGroupsService())->getDeleteMethod();
    }

    public static function get(): AdGroupsGet
    {
        return (new AdGroupsService())->getGetMethod();
    }

    public static function update(): AdGroupsUpdate
    {
        return (new AdGroupsService())->getUpdateMethod();
    }
}