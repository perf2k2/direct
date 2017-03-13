<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class BidModifiersAdd extends AddMethod implements MethodInterface
{
    protected $BidModifiers;

    public function setBidModifiers(array $BidModifiers)
    {
        $this->BidModifiers = $BidModifiers;
        return $this;
    }
}