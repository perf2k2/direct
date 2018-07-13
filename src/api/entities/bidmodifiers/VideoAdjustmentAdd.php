<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;

class VideoAdjustmentAdd extends Entity
{
    protected $BidModifier;

    public function __construct(int $BidModifier)
    {
      $this->BidModifier = $BidModifier;
    }
}
