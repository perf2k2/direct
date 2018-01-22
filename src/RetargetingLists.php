<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\RetargetingListsAdd;

class RetargetingLists
{
    public static function getApiName(): string
    {
        return 'retargetinglists';
    }

    public static function add(): RetargetingListsAdd
    {
        return new RetargetingListsAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }
}