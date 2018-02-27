<?php

namespace api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyAverageRoiAdd extends Entity
{
    protected $ReserveReturn;
    protected $RoiCoef;
    protected $GoalId;
    protected $WeeklySpendLimit;
    protected $BidCeiling;
    protected $Profitability;

    public function __construct(int $ReserveReturn, int $RoiCoef, int $GoalId)
    {
      $this->ReserveReturn = $ReserveReturn;
      $this->RoiCoef = $RoiCoef;
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

    public function setProfitability(int $Profitability)
    {
      $this->Profitability = $Profitability;
      return $this;
    }

}
