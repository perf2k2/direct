<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\BidsGet;
use perf2k2\direct\api\methods\BidsSet;
use perf2k2\direct\api\methods\BidsSetAuto;

class BidsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'bids';
    }
    
    public function getGetMethod(): BidsGet
    {
        return new BidsGet($this);
    }
    
    public function getSetMethod(): BidsSet
    {
        return new BidsSet($this);
    }
    
    public function getSetAutoMethod(): BidsSetAuto
    {
        return new BidsSetAuto($this);
    }
}