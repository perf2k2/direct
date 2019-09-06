<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\BidModifiersAdd;
use perf2k2\direct\api\methods\BidModifiersGet;
use perf2k2\direct\api\methods\BidModifiersSet;
use perf2k2\direct\api\methods\BidModifiersToggle;

class BidModifiersService extends AbstractService
{
    public function getApiName(): string
    {
        return 'bidmodifiers';
    }
    
    public function getAddMethod(): BidModifiersAdd
    {
        return new BidModifiersAdd($this);
    }
    
    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): BidModifiersGet
    {
        return new BidModifiersGet($this);
    }
    
    public function getSetMethod(): BidModifiersSet
    {
        return new BidModifiersSet($this);
    }
    
    public function getToggleMethod(): BidModifiersToggle
    {
        return new BidModifiersToggle($this);
    }
}