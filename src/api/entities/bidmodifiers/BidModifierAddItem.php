<?php

namespace direct\api\entities\bidmodifiers;

class BidModifierAddItem extends BidModifierAddBase
{
    protected $MobileAdjustment;
    protected $DemographicsAdjustments;
    protected $RetargetingAdjustments;
    protected $RegionalAdjustments;
    protected $VideoAdjustment;

    public function setMobileAdjustment(MobileAdjustmentAdd $MobileAdjustment)
    {
      $this->MobileAdjustment = $MobileAdjustment;
      return $this;
    }

    public function setDemographicsAdjustments(array $DemographicsAdjustments = null)
    {
      $this->DemographicsAdjustments = $DemographicsAdjustments;
      return $this;
    }

    public function setRetargetingAdjustments(array $RetargetingAdjustments = null)
    {
      $this->RetargetingAdjustments = $RetargetingAdjustments;
      return $this;
    }

    public function setRegionalAdjustments(array $RegionalAdjustments = null)
    {
      $this->RegionalAdjustments = $RegionalAdjustments;
      return $this;
    }

    public function setVideoAdjustment(VideoAdjustmentAdd $VideoAdjustment)
    {
      $this->VideoAdjustment = $VideoAdjustment;
      return $this;
    }
}
