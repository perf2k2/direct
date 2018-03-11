<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\KeywordsAdd;
use direct\api\methods\KeywordsGet;
use direct\api\methods\KeywordsUpdate;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;

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