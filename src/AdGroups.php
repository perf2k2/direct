<?php

namespace direct;

use direct\api\services\AdGroupsService;
use direct\api\DeleteMethod;
use direct\api\methods\AdGroupsAdd;
use direct\api\methods\AdGroupsGet;
use direct\api\methods\AdGroupsUpdate;

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