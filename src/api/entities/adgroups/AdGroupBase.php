<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\Entity;

class AdGroupBase extends Entity
{
    protected $RegionIds;
    protected $NegativeKeywords;
    protected $TrackingParams;

    public function setRegionIds(array $RegionIds = [])
    {
      $this->RegionIds = $RegionIds;
      return $this;
    }

    public function setNegativeKeywords(array $NegativeKeywords)
    {
      $this->NegativeKeywords = $NegativeKeywords;
      return $this;
    }

    public function setTrackingParams(string $TrackingParams)
    {
      $this->TrackingParams = $TrackingParams;
      return $this;
    }

}
