<?php

namespace direct\api\entities\campaigns\textcampaign;

use direct\api\Entity;

class StrategyMaximumClicksAdd extends StrategyWeeklyBudgetAddBase
{
    public function __construct(int $WeeklySpendLimit)
    {
      parent::__construct($WeeklySpendLimit);
    }
}
