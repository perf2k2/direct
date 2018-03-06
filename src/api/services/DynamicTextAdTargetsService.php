<?php

namespace api\services;

use api\AbstractService;
use api\methods\DynamicTextAdTargetsAdd;
use api\methods\DynamicTextAdTargetsGet;
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
    
    public function add(): DynamicTextAdTargetsAdd
    {
        return new DynamicTextAdTargetsAdd($this);
    }
    
    public function get(): DynamicTextAdTargetsGet
    {
        return new DynamicTextAdTargetsGet($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function resume(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function suspend(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function setBids(): SetBidsMethod
    {
        return new SetBidsMethod($this);
    }
}