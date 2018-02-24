<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class StrategyMaximumClicksAdd extends StrategyWeeklyBudgetAddBase
{
    public function __construct(int $WeeklySpendLimit)
    {
      parent::__construct($WeeklySpendLimit);
    }
}
