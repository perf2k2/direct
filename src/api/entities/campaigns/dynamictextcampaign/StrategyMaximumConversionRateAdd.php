<?php

namespace api\entities\campaigns\dynamictextcampaign;

class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{
    protected $GoalId;

    public function __construct(int $WeeklySpendLimit, int $GoalId)
    {
      parent::__construct($WeeklySpendLimit);
      $this->GoalId = $GoalId;
    }
}
