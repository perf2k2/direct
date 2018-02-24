<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class StrategyWeeklyClickPackageAdd extends Entity
{
    protected $ClicksPerWeek;
    protected $AverageCpc;
    protected $BidCeiling;

    public function __construct(int $ClicksPerWeek)
    {
      $this->ClicksPerWeek = $ClicksPerWeek;
    }

    public function setAverageCpc(int $AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setBidCeiling(int $BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
