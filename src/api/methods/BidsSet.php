<?php

namespace direct\api\methods;


use direct\api\SetMethod;

class BidsSet extends SetMethod
{
    protected $Bids = [];

    public function setBids(array $bids): self
    {
        $this->Bids = $bids;
        return $this;
    }
}