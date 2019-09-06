<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\VCardsAdd;
use perf2k2\direct\api\methods\VCardsGet;

class VCardsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'vcards';
    }
    
    public function getAddMethod(): VCardsAdd
    {
        return new VCardsAdd($this);
    }
    
    public function getGetMethod(): VCardsGet
    {
        return new VCardsGet($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}