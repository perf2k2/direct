<?php

namespace perf2k2\direct\api;

class SetBidsMethod extends AbstractMethod
{
    protected $Bids;
    
    public function getApiName(): string
    {
        return 'setBids';
    }
    
    public function setBids(array $Bids)
    {
        $this->Bids = $Bids;
        return $this;
    }
}