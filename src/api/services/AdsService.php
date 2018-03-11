<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\ArchiveMethod;
use direct\api\DeleteMethod;
use direct\api\methods\AdsAdd;
use direct\api\methods\AdsGet;
use direct\api\methods\AdsUpdate;
use direct\api\ModerateMethod;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;
use direct\api\UnarchiveMethod;

class AdsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'ads';
    }
    
    public function add(): AdsAdd
    {
        return new AdsAdd($this);
    }
    
    public function archive(): ArchiveMethod
    {
        return new ArchiveMethod($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): AdsGet
    {
        return new AdsGet($this);
    }
    
    public function moderate(): ModerateMethod
    {
        return new ModerateMethod($this);
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
    
    public function update(): AdsUpdate
    {
        return new AdsUpdate($this);
    }
}