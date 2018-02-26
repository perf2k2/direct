<?php

namespace api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyAverageCpaAdd extends Entity
{
    protected $AverageCpa;
    protected $GoalId;
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct($AverageCpa, $GoalId)
    {
      $this->AverageCpa = $AverageCpa;
      $this->GoalId = $GoalId;
    }

    public function setAverageCpa($AverageCpa)
    {
      $this->AverageCpa = $AverageCpa;
      return $this;
    }

    public function setGoalId($GoalId)
    {
      $this->GoalId = $GoalId;
      return $this;
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
