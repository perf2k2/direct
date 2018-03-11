<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\Entity;

class DynamicTextCampaignStrategyAddBase extends Entity
{
    protected $WbMaximumClicks;
    protected $WbMaximumConversionRate;
    protected $AverageCpc;
    protected $AverageCpa;
    protected $WeeklyClickPackage;
    protected $AverageRoi;

    public function setWbMaximumClicks(StrategyMaximumClicksAdd $WbMaximumClicks)
    {
      $this->WbMaximumClicks = $WbMaximumClicks;
      return $this;
    }

    public function setWbMaximumConversionRate(StrategyMaximumConversionRateAdd $WbMaximumConversionRate)
    {
      $this->WbMaximumConversionRate = $WbMaximumConversionRate;
      return $this;
    }

    public function setAverageCpc(StrategyAverageCpcAdd $AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setAverageCpa(StrategyAverageCpaAdd $AverageCpa)
    {
      $this->AverageCpa = $AverageCpa;
      return $this;
    }

    public function setWeeklyClickPackage(StrategyWeeklyClickPackageAdd $WeeklyClickPackage)
    {
      $this->WeeklyClickPackage = $WeeklyClickPackage;
      return $this;
    }

    public function setAverageRoi(StrategyAverageRoiAdd $AverageRoi)
    {
      $this->AverageRoi = $AverageRoi;
      return $this;
    }

}
