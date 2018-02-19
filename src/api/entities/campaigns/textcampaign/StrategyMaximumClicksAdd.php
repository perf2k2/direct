<?php

namespace api\entities\campaigns\textcampaign;

class StrategyMaximumClicksAdd extends StrategyWeeklyBudgetAddBase
{
    public function __construct(int $WeeklySpendLimit)
    {
      parent::__construct($WeeklySpendLimit);
    }
}
