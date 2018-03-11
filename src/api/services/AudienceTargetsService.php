<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\AudienceTargetsAdd;
use direct\api\DeleteMethod;
use direct\api\methods\AudienceTargetsGet;
use direct\api\ResumeMethod;
use direct\api\SetBidsMethod;
use direct\api\SuspendMethod;

class AudienceTargetsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'audiencetargets';
    }
    
    public function add(): AudienceTargetsAdd
    {
        return new AudienceTargetsAdd($this);
    }
    
    public function get(): AudienceTargetsGet
    {
        return new AudienceTargetsGet($this);
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