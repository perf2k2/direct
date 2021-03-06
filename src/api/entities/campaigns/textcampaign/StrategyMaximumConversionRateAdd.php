<?php

namespace perf2k2\direct\api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{
    protected $GoalId;

    public function __construct(int $WeeklySpendLimit, int $GoalId)
    {
      parent::__construct($WeeklySpendLimit);
      $this->GoalId = $GoalId;
    }

    public function setGoalId(int $GoalId)
    {
      $this->GoalId = $GoalId;
      return $this;
    }
}
