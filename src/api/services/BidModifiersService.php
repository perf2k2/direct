<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\BidModifiersAdd;
use direct\api\methods\BidModifiersGet;
use direct\api\methods\BidModifiersSet;
use direct\api\methods\BidModifiersToggle;

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