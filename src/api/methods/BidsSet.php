<?php

namespace perf2k2\direct\api\methods;


use perf2k2\direct\api\SetMethod;

class BidsSet extends SetMethod
{
    protected $Bids = [];

    public function setBids(array $bids): self
    {
        $this->Bids = $bids;
        return $this;
    }
}