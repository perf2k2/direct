<?php

namespace direct\api\entities\campaigns;

use direct\api\enums\campaign\DailyBudgetModeEnum;
use direct\api\Entity;

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