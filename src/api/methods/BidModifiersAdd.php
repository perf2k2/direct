<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class BidModifiersAdd extends AddMethod
{
    protected $BidModifiers;

    public function setBidModifiers(array $BidModifiers)
    {
        $this->BidModifiers = $BidModifiers;
        return $this;
    }
}