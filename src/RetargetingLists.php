<?php

namespace perf2k2\direct;

use api\services\RetargetingListsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\RetargetingListsAdd;
use perf2k2\direct\api\methods\RetargetingListsGet;
use perf2k2\direct\api\methods\RetargetingListsUpdate;

class RetargetingLists
{
    public static function add(): RetargetingListsAdd
    {
        return (new RetargetingListsService())->add();
    }
    
    public static function update(): RetargetingListsUpdate
    {
        return (new RetargetingListsService())->update();
    }

    public static function delete(): DeleteMethod
    {
        return (new RetargetingListsService())->delete();
    }

    public static function get(): RetargetingListsGet
    {
        return (new RetargetingListsService())->get();
    }
}