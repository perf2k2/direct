<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\AdGroupsAdd;
use perf2k2\direct\api\methods\AdGroupsDelete;
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
        return new AdGroupsAdd((new self())->getApiName());
    }

    public static function delete(): AdGroupsDelete
    {
        return new AdGroupsDelete((new self())->getApiName());
    }

    public static function get(): AdGroupsGet
    {
        return new AdGroupsGet((new self())->getApiName());
    }

    public static function update(): AdGroupsUpdate
    {
        return new AdGroupsUpdate((new self())->getApiName());
    }

}