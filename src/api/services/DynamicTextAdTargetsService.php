<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\DynamicTextAdTargetsAdd;
use perf2k2\direct\api\methods\DynamicTextAdTargetsGet;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\SuspendMethod;

class DynamicTextAdTargetsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'dynamictextadtargets';
    }
    
    public function getAddMethod(): DynamicTextAdTargetsAdd
    {
        return new DynamicTextAdTargetsAdd($this);
    }
    
    public function getGetMethod(): DynamicTextAdTargetsGet
    {
        return new DynamicTextAdTargetsGet($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getResumeMethod(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function getSuspendMethod(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function getSetBidsMethod(): SetBidsMethod
    {
        return new SetBidsMethod($this);
    }
}