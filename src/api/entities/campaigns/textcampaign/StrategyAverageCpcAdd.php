<?php

namespace api\entities\campaigns\textcampaign;

class StrategyAverageCpcAdd
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
