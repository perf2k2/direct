<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdsAdd;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsUpdate;
use perf2k2\direct\api\ModerateMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

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