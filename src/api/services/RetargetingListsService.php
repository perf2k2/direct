<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\RetargetingListsAdd;
use perf2k2\direct\api\methods\RetargetingListsGet;
use perf2k2\direct\api\methods\RetargetingListsUpdate;

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