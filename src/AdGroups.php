<?php

namespace perf2k2\direct;

use api\services\AdGroupsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdGroupsAdd;
use perf2k2\direct\api\methods\AdGroupsGet;
use perf2k2\direct\api\methods\AdGroupsUpdate;

class AdGroups
{
    public static function add(): AdGroupsAdd
    {
        return (new AdGroupsService())->add();
    }

    public static function delete(): DeleteMethod
    {
        return (new AdGroupsService())->delete();
    }

    public static function get(): AdGroupsGet
    {
        return (new AdGroupsService())->get();
    }

    public static function update(): AdGroupsUpdate
    {
        return (new AdGroupsService())->update();
    }
}