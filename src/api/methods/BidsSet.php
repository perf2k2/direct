<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;
use perf2k2\direct\api\SetMethod;

class BidsSet extends SetMethod implements MethodInterface
{
    public $Bids = [];

    public function setBids(array $bids): self
    {
        $this->Bids = $bids;
        return $this;
    }
}