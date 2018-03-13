<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\Entity;

class RegionalAdjustmentAdd extends Entity
{
    protected $RegionId;
    protected $BidModifier;

    public function __construct(int $RegionId, int $BidModifier)
    {
      $this->RegionId = $RegionId;
      $this->BidModifier = $BidModifier;
    }
}
