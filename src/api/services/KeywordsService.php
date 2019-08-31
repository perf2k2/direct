<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\KeywordsAdd;
use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\methods\KeywordsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class KeywordsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'keywords';
    }
    
    public function getAddMethod(): KeywordsAdd
    {
        return new KeywordsAdd($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): KeywordsGet
    {
        return new KeywordsGet($this);
    }
    
    public function getResumeMethod(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function getSuspendMethod(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function getUpdateMethod(): KeywordsUpdate
    {
        return new KeywordsUpdate($this);
    }
}