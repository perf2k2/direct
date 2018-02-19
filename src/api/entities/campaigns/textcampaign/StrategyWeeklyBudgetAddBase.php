<?php

namespace api\entities\campaigns\textcampaign;

class StrategyWeeklyBudgetAddBase
{
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct(int $WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
    }

    public function setWeeklySpendLimit(int $WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
      return $this;
    }

    public function setBidCeiling(int $BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
