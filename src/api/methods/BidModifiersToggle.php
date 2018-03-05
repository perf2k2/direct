<?php

namespace perf2k2\direct\api\methods;


use perf2k2\direct\api\ToggleMethod;

class BidModifiersToggle extends ToggleMethod
{
    protected $BidModifierToggleItems = [];

    public function setBidModifierToggleItems(array $BidModifierToggleItems): self
    {
        $this->BidModifierToggleItems = $BidModifierToggleItems;
        return $this;
    }
}