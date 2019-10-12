<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\entities\ArrayOfLong;
use perf2k2\direct\api\entities\ArrayOfString;
use perf2k2\direct\api\Entity;

class AdGroupUpdateItem extends Entity
{
    protected $Id;
    protected $Name;
    protected $MobileAppAdGroup;
    protected $DynamicTextAdGroup;
    protected $RegionIds;
    protected $NegativeKeywords;
    protected $NegativeKeywordSharedSetIds;
    protected $TrackingParams;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }

    /**
     * @param int[] $RegionIds
     * @return AdGroupUpdateItem
     */
    public function setRegionIds(array $RegionIds = []): AdGroupUpdateItem
    {
        $this->RegionIds = $RegionIds;
        return $this;
    }

    public function setNegativeKeywords(ArrayOfString $NegativeKeywords): AdGroupUpdateItem
    {
        $this->NegativeKeywords = $NegativeKeywords;
        return $this;
    }

    public function setNegativeKeywordSharedSetIds(ArrayOfLong $NegativeKeywordSharedSetIds): AdGroupUpdateItem
    {
        $this->NegativeKeywordSharedSetIds = $NegativeKeywordSharedSetIds;
        return $this;
    }

    public function setTrackingParams(string $TrackingParams): AdGroupUpdateItem
    {
        $this->TrackingParams = $TrackingParams;
        return $this;
    }

    public function setName(string $Name): AdGroupUpdateItem
    {
      $this->Name = $Name;
      return $this;
    }

    public function setMobileAppAdGroup(MobileAppAdGroupUpdate $MobileAppAdGroup): AdGroupUpdateItem
    {
      $this->MobileAppAdGroup = $MobileAppAdGroup;
      return $this;
    }

    public function setDynamicTextAdGroup(DynamicTextAdGroup $DynamicTextAdGroup): AdGroupUpdateItem
    {
      $this->DynamicTextAdGroup = $DynamicTextAdGroup;
      return $this;
    }
}
