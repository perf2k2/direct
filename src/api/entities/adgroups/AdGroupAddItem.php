<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\entities\ArrayOfString;
use perf2k2\direct\api\Entity;

class AdGroupAddItem extends Entity
{
    protected $Name;
    protected $CampaignId;
    protected $RegionIds;
    protected $NegativeKeywords;
    protected $TrackingParams;
    protected $MobileAppAdGroup;
    protected $DynamicTextAdGroup;
    protected $CpmBannerKeywordsAdGroup;
    protected $CpmBannerUserProfileAdGroup;
    protected $CpmVideoAdGroup;

    /**
     * @param string $Name
     * @param int $CampaignId
     * @param int[] $RegionIds
     */
    public function __construct(string $Name, int $CampaignId, $RegionIds)
    {
        $this->Name = $Name;
        $this->CampaignId = $CampaignId;
        $this->RegionIds = $RegionIds;
    }

    public function setNegativeKeywords(ArrayOfString $NegativeKeywords): AdGroupAddItem
    {
      $this->NegativeKeywords = $NegativeKeywords;
      return $this;
    }

    public function setTrackingParams(string $TrackingParams): AdGroupAddItem
    {
      $this->TrackingParams = $TrackingParams;
      return $this;
    }

    public function setMobileAppAdGroup(MobileAppAdGroupAdd $MobileAppAdGroup): AdGroupAddItem
    {
      $this->MobileAppAdGroup = $MobileAppAdGroup;
      return $this;
    }

    public function setDynamicTextAdGroup(DynamicTextAdGroup $DynamicTextAdGroup): AdGroupAddItem
    {
      $this->DynamicTextAdGroup = $DynamicTextAdGroup;
      return $this;
    }

    public function setCpmBannerKeywordsAdGroup(CpmBannerKeywordsAdGroupAdd $CpmBannerKeywordsAdGroup): AdGroupAddItem
    {
        $this->CpmBannerKeywordsAdGroup = $CpmBannerKeywordsAdGroup;
        return $this;
    }

    public function setCpmBannerUserProfileAdGroup(CpmBannerUserProfileAdGroupAdd $CpmBannerUserProfileAdGroup): AdGroupAddItem
    {
        $this->CpmBannerUserProfileAdGroup = $CpmBannerUserProfileAdGroup;
        return $this;
    }

    public function setCpmVideoAdGroup(CpmVideoAdGroupAdd $CpmVideoAdGroup): AdGroupAddItem
    {
        $this->CpmVideoAdGroup = $CpmVideoAdGroup;
        return $this;
    }
}
