<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
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
    
    public function getAddMethod(): AdsAdd
    {
        return new AdsAdd($this);
    }
    
    public function getArchiveMethod(): ArchiveMethod
    {
        return new ArchiveMethod($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): AdsGet
    {
        return new AdsGet($this);
    }
    
    public function getModerateMethod(): ModerateMethod
    {
        return new ModerateMethod($this);
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
    
    public function getUpdateMethod(): AdsUpdate
    {
        return new AdsUpdate($this);
    }
}