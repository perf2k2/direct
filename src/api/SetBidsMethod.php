<?php

namespace perf2k2\direct\api;

class SetBidsMethod extends Method implements MethodInterface
{
    protected $Bids;
    
    public static function getApiName(): string
    {
        return 'setBids';
    }
    
    public function setBids(array $Bids)
    {
        $this->Bids = $Bids;
        return $this;
    }
}