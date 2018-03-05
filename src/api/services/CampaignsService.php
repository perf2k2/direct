<?php

namespace api\services;

use api\AbstractService;
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
    
    public function add(): CampaignsAdd
    {
        return new CampaignsAdd($this);
    }
    
    public function archive(): ArchiveMethod
    {
        return new ArchiveMethod($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): CampaignsGet
    {
        return new CampaignsGet($this);
    }
    
    public function resume(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function suspend(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function unarchive(): UnarchiveMethod
    {
        return new UnarchiveMethod($this);
    }
    
    public function update(): CampaignsUpdate
    {
        return new CampaignsUpdate($this);
    }
}