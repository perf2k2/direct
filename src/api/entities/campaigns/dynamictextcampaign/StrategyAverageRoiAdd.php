<?php

namespace apientitiescampaignsdynamictextcampaign;

class StrategyAverageRoiAdd
{
    protected $ReserveReturn;
    protected $RoiCoef;
    protected $GoalId;
    protected $WeeklySpendLimit;
    protected $BidCeiling;
    protected $Profitability;

    public function __construct($ReserveReturn, $RoiCoef, $GoalId)
    {
      $this->ReserveReturn = $ReserveReturn;
      $this->RoiCoef = $RoiCoef;
      $this->GoalId = $GoalId;
    }

    public function setReserveReturn($ReserveReturn)
    {
      $this->ReserveReturn = $ReserveReturn;
      return $this;
    }

    public function setRoiCoef($RoiCoef)
    {
      $this->RoiCoef = $RoiCoef;
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

    public function setProfitability($Profitability)
    {
      $this->Profitability = $Profitability;
      return $this;
    }

}
