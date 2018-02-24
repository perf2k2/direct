<?php

namespace apientitiescampaignsdynamictextcampaign;

use perf2k2\direct\api\Entity;

class StrategyWeeklyClickPackageAdd extends Entity
{
    protected $ClicksPerWeek;
    protected $AverageCpc;
    protected $BidCeiling;

    public function __construct($ClicksPerWeek)
    {
      $this->ClicksPerWeek = $ClicksPerWeek;
    }

    public function setClicksPerWeek($ClicksPerWeek)
    {
      $this->ClicksPerWeek = $ClicksPerWeek;
      return $this;
    }

    public function setAverageCpc($AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setBidCeiling($BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
