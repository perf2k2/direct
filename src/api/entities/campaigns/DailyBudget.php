<?php

namespace perf2k2\direct\api\entities\campaigns;

use perf2k2\direct\api\enums\campaign\DailyBudgetModeEnum;
use perf2k2\direct\api\Entity;

class DailyBudget extends Entity
{
    protected $Amount;
    protected $Mode;
    
    public function __construct(int $Amount, DailyBudgetModeEnum $Mode)
    {
        $this->Amount = $Amount;
        $this->Mode = $Mode;
    }
}