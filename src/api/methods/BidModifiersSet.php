<?php

namespace direct\api\methods;


use direct\api\SetMethod;

class BidModifiersSet extends SetMethod
{
    protected $BidModifiers = [];

    public function setBidModifiers(array $BidModifiers): self
    {
        $this->BidModifiers = $BidModifiers;
        return $this;
    }
}