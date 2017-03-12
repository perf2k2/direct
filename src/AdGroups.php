<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdGroupsAdd;
use perf2k2\direct\api\methods\AdGroupsGet;
use perf2k2\direct\api\methods\AdGroupsUpdate;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class AdGroups extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'adgroups';
    }

    public static function add(): AdGroupsAdd
    {
        return new AdGroupsAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): AdGroupsGet
    {
        return new AdGroupsGet(self::getApiName());
    }

    public static function update(): AdGroupsUpdate
    {
        return new AdGroupsUpdate(self::getApiName());
    }

}