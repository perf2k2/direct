<?php

namespace api\entities\campaigns\textcampaign;

class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{
    protected $GoalId;

    public function __construct($WeeklySpendLimit, $GoalId)
    {
      parent::__construct($WeeklySpendLimit);
      $this->GoalId = $GoalId;
    }

    public function setGoalId($GoalId)
    {
      $this->GoalId = $GoalId;
      return $this;
    }

}
