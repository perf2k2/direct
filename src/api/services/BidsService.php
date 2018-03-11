<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\BidsGet;
use direct\api\methods\BidsSet;
use direct\api\methods\BidsSetAuto;

class BidsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'bids';
    }
    
    public function get(): BidsGet
    {
        return new BidsGet($this);
    }
    
    public function set(): BidsSet
    {
        return new BidsSet($this);
    }
    
    public function setAuto(): BidsSetAuto
    {
        return new BidsSetAuto($this);
    }
}