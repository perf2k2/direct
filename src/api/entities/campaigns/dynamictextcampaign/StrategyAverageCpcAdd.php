<?php

namespace perf2k2\direct\api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyAverageCpcAdd extends Entity
{
    protected $AverageCpc;
    protected $WeeklySpendLimit;

    public function __construct(int $AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
    }

    public function setWeeklySpendLimit(int $WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
      return $this;
    }
}
