<?php

namespace api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\Entity;

class StrategyWeeklyBudgetAddBase extends Entity
{
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct(int $WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
    }

    public function setBidCeiling(int $BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
