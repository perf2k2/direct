<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\Entity;

class StrategyAverageCpaAdd extends Entity
{
    protected $AverageCpa;
    protected $GoalId;
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct(int $AverageCpa, int $GoalId)
    {
      $this->AverageCpa = $AverageCpa;
      $this->GoalId = $GoalId;
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
