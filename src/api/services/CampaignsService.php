<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\ArchiveMethod;
use direct\api\DeleteMethod;
use direct\api\methods\CampaignsAdd;
use direct\api\methods\CampaignsGet;
use direct\api\methods\CampaignsUpdate;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;
use direct\api\UnarchiveMethod;

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