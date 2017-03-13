<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;
use perf2k2\direct\api\ToggleMethod;

class BidModifiersToggle extends ToggleMethod implements MethodInterface
{
    protected $BidModifierToggleItems = [];

    public function setBidModifierToggleItems(array $BidModifierToggleItems): self
    {
        $this->BidModifierToggleItems = $BidModifierToggleItems;
        return $this;
    }
}