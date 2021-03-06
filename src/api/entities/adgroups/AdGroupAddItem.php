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

    public function __construct(string $Name, int $CampaignId, array $RegionIds)
    {
      $this->Name = $Name;
      $this->CampaignId = $CampaignId;
      $this->RegionIds = $RegionIds;
    }

    public function setNegativeKeywords(ArrayOfString $NegativeKeywords)
    {
      $this->NegativeKeywords = $NegativeKeywords;
      return $this;
    }

    public function setTrackingParams(string $TrackingParams)
    {
      $this->TrackingParams = $TrackingParams;
      return $this;
    }

    public function setMobileAppAdGroup(MobileAppAdGroupAdd $MobileAppAdGroup)
    {
      $this->MobileAppAdGroup = $MobileAppAdGroup;
      return $this;
    }

    public function setDynamicTextAdGroup(DynamicTextAdGroupAdd $DynamicTextAdGroup)
    {
      $this->DynamicTextAdGroup = $DynamicTextAdGroup;
      return $this;
    }
}
