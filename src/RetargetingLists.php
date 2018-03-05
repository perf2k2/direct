<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\RetargetingListsAdd;
use perf2k2\direct\api\methods\RetargetingListsGet;
use perf2k2\direct\api\methods\RetargetingListsUpdate;

class RetargetingLists
{
    public function getApiName(): string
    {
        return 'retargetinglists';
    }

    public static function add(): RetargetingListsAdd
    {
        return new RetargetingListsAdd(self::getApiName());
    }
    
    public static function update(): RetargetingListsUpdate
    {
        return new RetargetingListsUpdate(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): RetargetingListsGet
    {
        return new RetargetingListsGet(self::getApiName());
    }
}