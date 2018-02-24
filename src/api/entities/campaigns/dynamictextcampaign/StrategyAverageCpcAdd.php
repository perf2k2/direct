<?php

namespace apientitiescampaignsdynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyAverageCpcAdd extends Entity
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
