<?php

namespace apientitiescampaignsdynamictextcampaign;

class DynamicTextCampaignStrategyAddBase
{
    protected $WbMaximumClicks;
    protected $WbMaximumConversionRate;
    protected $AverageCpc;
    protected $AverageCpa;
    protected $WeeklyClickPackage;
    protected $AverageRoi;

    public function setWbMaximumClicks($WbMaximumClicks)
    {
      $this->WbMaximumClicks = $WbMaximumClicks;
      return $this;
    }

    public function setWbMaximumConversionRate($WbMaximumConversionRate)
    {
      $this->WbMaximumConversionRate = $WbMaximumConversionRate;
      return $this;
    }

    public function setAverageCpc($AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setAverageCpa($AverageCpa)
    {
      $this->AverageCpa = $AverageCpa;
      return $this;
    }

    public function setWeeklyClickPackage($WeeklyClickPackage)
    {
      $this->WeeklyClickPackage = $WeeklyClickPackage;
      return $this;
    }

    public function setAverageRoi($AverageRoi)
    {
      $this->AverageRoi = $AverageRoi;
      return $this;
    }

}
