<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\methods\BidsSetAuto;

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