<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\AudienceTargetsAdd;
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
    
    public function getAddMethod(): AudienceTargetsAdd
    {
        return new AudienceTargetsAdd($this);
    }
    
    public function getGetMethod(): AudienceTargetsGet
    {
        return new AudienceTargetsGet($this);
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