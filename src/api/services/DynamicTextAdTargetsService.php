<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\DynamicTextAdTargetsAdd;
use direct\api\methods\DynamicTextAdTargetsGet;
use direct\api\DeleteMethod;
use direct\api\ResumeMethod;
use direct\api\SetBidsMethod;
use direct\api\SuspendMethod;

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