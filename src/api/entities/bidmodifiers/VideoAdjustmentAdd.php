<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\Entity;

class VideoAdjustmentAdd extends Entity
{
    protected $BidModifier;

    public function __construct(int $BidModifier)
    {
      $this->BidModifier = $BidModifier;
    }
}
