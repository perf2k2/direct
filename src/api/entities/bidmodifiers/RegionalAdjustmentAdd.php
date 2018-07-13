<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;

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
