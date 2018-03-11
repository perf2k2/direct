<?php

namespace direct\api\entities\campaigns\mobileappcampaign;

use direct\api\Entity;

class MobileAppCampaignStrategyAddBase extends Entity
{
    protected $WbMaximumClicks;
    protected $WbMaximumAppInstalls;
    protected $AverageCpc;
    protected $AverageCpi;
    protected $WeeklyClickPackage;

    public function setWbMaximumClicks(StrategyMaximumClicksAdd $WbMaximumClicks)
    {
      $this->WbMaximumClicks = $WbMaximumClicks;
      return $this;
    }

    public function setWbMaximumAppInstalls(StrategyMaximumAppInstallsAdd $WbMaximumAppInstalls)
    {
      $this->WbMaximumAppInstalls = $WbMaximumAppInstalls;
      return $this;
    }

    public function setAverageCpc(StrategyAverageCpcAdd $AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    public function setAverageCpi(StrategyAverageCpiAdd $AverageCpi)
    {
      $this->AverageCpi = $AverageCpi;
      return $this;
    }

    public function setWeeklyClickPackage(StrategyWeeklyClickPackageAdd $WeeklyClickPackage)
    {
      $this->WeeklyClickPackage = $WeeklyClickPackage;
      return $this;
    }

}
