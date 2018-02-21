<?php

namespace apientitiescampaignsdynamictextcampaign;

class StrategyAverageCpcAdd
{
    protected $AverageCpc;
    protected $WeeklySpendLimit;

    public function __construct($AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
    }

    public function setAverageCpc($AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setWeeklySpendLimit($WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
      return $this;
    }

}
