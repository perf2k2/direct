<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;

class RetargetingAdjustmentAdd extends Entity
{
    protected $RetargetingConditionId;
    protected $BidModifier;

    public function __construct(int $RetargetingConditionId, int $BidModifier)
    {
      $this->RetargetingConditionId = $RetargetingConditionId;
      $this->BidModifier = $BidModifier;
    }
}
