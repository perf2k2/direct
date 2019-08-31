<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
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
    
    public function getAddMethod(): RetargetingListsAdd
    {
        return new RetargetingListsAdd($this);
    }
    
    public function getUpdateMethod(): RetargetingListsUpdate
    {
        return new RetargetingListsUpdate($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): RetargetingListsGet
    {
        return new RetargetingListsGet($this);
    }
}