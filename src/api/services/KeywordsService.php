<?php

namespace api\services;

use api\AbstractService;
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
    
    public function add(): KeywordsAdd
    {
        return new KeywordsAdd($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): KeywordsGet
    {
        return new KeywordsGet($this);
    }
    
    public function resume(): ResumeMethod
    {
        return new ResumeMethod($this);
    }
    
    public function suspend(): SuspendMethod
    {
        return new SuspendMethod($this);
    }
    
    public function update(): KeywordsUpdate
    {
        return new KeywordsUpdate($this);
    }
}