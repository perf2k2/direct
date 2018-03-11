<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\FilteredEntity;

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