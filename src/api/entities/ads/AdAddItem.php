<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\Entity;

class AdAddItem extends Entity
{
    protected $AdGroupId;
    protected $TextAd;
    protected $DynamicTextAd;
    protected $MobileAppAd;
    protected $TextImageAd;
    protected $MobileAppImageAd;
    protected $TextAdBuilderAd;
    protected $MobileAppAdBuilderAd;
    protected $CpcVideoAdBuilderAd;
    protected $CpmBannerAdBuilderAd;

    public function __construct(int $AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
    }

    public function setTextAd(TextAdAdd $TextAd): AdAddItem
    {
      $this->TextAd = $TextAd;
      return $this;
    }

    public function setDynamicTextAd(DynamicTextAdAdd $DynamicTextAd): AdAddItem
    {
      $this->DynamicTextAd = $DynamicTextAd;
      return $this;
    }

    public function setMobileAppAd(MobileAppAdAdd $MobileAppAd): AdAddItem
    {
      $this->MobileAppAd = $MobileAppAd;
      return $this;
    }

    public function setTextImageAd(TextImageAdAdd $TextImageAd): AdAddItem
    {
      $this->TextImageAd = $TextImageAd;
      return $this;
    }

    public function setMobileAppImageAd(MobileAppImageAdAdd $MobileAppImageAd): AdAddItem
    {
      $this->MobileAppImageAd = $MobileAppImageAd;
      return $this;
    }

    public function setTextAdBuilderAd(TextAdBuilderAdAdd $TextAdBuilderAd): AdAddItem
    {
      $this->TextAdBuilderAd = $TextAdBuilderAd;
      return $this;
    }

    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdAdd $MobileAppAdBuilderAd): AdAddItem
    {
      $this->MobileAppAdBuilderAd = $MobileAppAdBuilderAd;
      return $this;
    }

    public function setCpcVideoAdBuilderAd(CpcVideoAdBuilderAdAdd $CpcVideoAdBuilderAd): AdAddItem
    {
        $this->CpcVideoAdBuilderAd = $CpcVideoAdBuilderAd;
        return $this;
    }

    public function setCpmBannerAdBuilderAd(CpmBannerAdBuilderAdAdd $CpmBannerAdBuilderAd): AdAddItem
    {
        $this->CpmBannerAdBuilderAd = $CpmBannerAdBuilderAd;
        return $this;
    }
}
