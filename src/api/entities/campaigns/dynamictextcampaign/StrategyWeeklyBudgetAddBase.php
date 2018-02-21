<?php

namespace apientitiescampaignsdynamictextcampaign;

class StrategyWeeklyBudgetAddBase
{
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct($WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
    }

    public function setWeeklySpendLimit($WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
      return $this;
    }

    public function setBidCeiling($BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
