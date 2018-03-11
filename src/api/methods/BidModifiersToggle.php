<?php

namespace direct\api\methods;


use direct\api\ToggleMethod;

class BidModifiersToggle extends ToggleMethod
{
    protected $BidModifierToggleItems = [];

    public function setBidModifierToggleItems(array $BidModifierToggleItems): self
    {
        $this->BidModifierToggleItems = $BidModifierToggleItems;
        return $this;
    }
}