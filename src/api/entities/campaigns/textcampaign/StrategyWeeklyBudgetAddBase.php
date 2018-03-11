<?php

namespace direct\api\entities\campaigns\textcampaign;

use direct\api\Entity;

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
