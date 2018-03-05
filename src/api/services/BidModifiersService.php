<?php

namespace api\services;

use api\AbstractService;
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
    
    public function add(): BidModifiersAdd
    {
        return new BidModifiersAdd($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function get(): BidModifiersGet
    {
        return new BidModifiersGet($this);
    }
    
    public function set(): BidModifiersSet
    {
        return new BidModifiersSet($this);
    }
    
    public function toggle(): BidModifiersToggle
    {
        return new BidModifiersToggle($this);
    }
}