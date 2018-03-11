<?php

namespace direct\api\entities\campaigns\textcampaign;

use direct\api\Entity;

class TextCampaignStrategyAddBase extends Entity
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

    public function setWeeklyClickPackage(StrategyAverageRoiAdd $WeeklyClickPackage)
    {
      $this->WeeklyClickPackage = $WeeklyClickPackage;
      return $this;
    }

    public function setAverageRoi(StrategyWeeklyClickPackageAdd $AverageRoi)
    {
      $this->AverageRoi = $AverageRoi;
      return $this;
    }
}
