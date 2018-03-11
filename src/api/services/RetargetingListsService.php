<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\RetargetingListsAdd;
use direct\api\methods\RetargetingListsGet;
use direct\api\methods\RetargetingListsUpdate;

class RetargetingListsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'retargetinglists';
    }
    
    public function add(): RetargetingListsAdd
    {
        return new RetargetingListsAdd($this);
    }
    
    public function update(): RetargetingListsUpdate
    {
        return new RetargetingListsUpdate($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): RetargetingListsGet
    {
        return new RetargetingListsGet($this);
    }
}