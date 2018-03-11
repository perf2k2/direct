<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class BidModifiersAdd extends AddMethod
{
    protected $BidModifiers;

    public function setBidModifiers(array $BidModifiers)
    {
        $this->BidModifiers = $BidModifiers;
        return $this;
    }
}