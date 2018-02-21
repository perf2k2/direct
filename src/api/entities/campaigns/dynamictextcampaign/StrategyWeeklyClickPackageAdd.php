<?php

namespace apientitiescampaignsdynamictextcampaign;

class StrategyWeeklyClickPackageAdd
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
