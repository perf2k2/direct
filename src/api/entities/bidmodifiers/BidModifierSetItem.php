<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\FilteredEntity;

final class BidModifierSetItem extends FilteredEntity
{
    protected $Id;
    protected $BidModifier;

    public function setId(int $Id): self
    {
        $this->Id = $Id;
        return $this;
    }

    public function setBidModifier(int $BidModifier): self
    {
        $this->BidModifier = $BidModifier;
        return $this;
    }
}