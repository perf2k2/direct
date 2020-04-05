<?php

namespace perf2k2\direct\api\entities\ads;

class MobileAppAdBuilderAdAdd extends AdBuilderAdAddBase
{
    protected $TrackingUrl;
    
    public function setTrackingUrl(string $TrackingUrl): MobileAppAdBuilderAdAdd
    {
      $this->TrackingUrl = $TrackingUrl;
      return $this;
    }
}
