<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\CampaignsAdd;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\methods\CampaignsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

class CampaignsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'campaigns';
    }
    
    public function getAddMethod(): CampaignsAdd
    {
        return new CampaignsAdd($this);
    }
    
    public function getArchiveMethod(): ArchiveMethod
    {
        return new ArchiveMethod($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): CampaignsGet
    {
        return new CampaignsGet($this);
    }
    
    public function getResumeMethod(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function getSuspendMethod(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function getUnArchiveMethod(): UnarchiveMethod
    {
        return new UnarchiveMethod($this);
    }
    
    public function getUpdateMethod(): CampaignsUpdate
    {
        return new CampaignsUpdate($this);
    }
}