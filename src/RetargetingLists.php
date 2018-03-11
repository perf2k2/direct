<?php

namespace direct;

use direct\api\services\RetargetingListsService;
use direct\api\DeleteMethod;
use direct\api\methods\RetargetingListsAdd;
use direct\api\methods\RetargetingListsGet;
use direct\api\methods\RetargetingListsUpdate;

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