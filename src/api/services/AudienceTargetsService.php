<?php

namespace api\services;

use api\AbstractService;
use api\methods\AudienceTargetsAdd;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AudienceTargetsGet;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SetBidsMethod;
use perf2k2\direct\api\SuspendMethod;

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