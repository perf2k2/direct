<?php

namespace apientitiescampaignsdynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyWeeklyBudgetAddBase extends Entity
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
