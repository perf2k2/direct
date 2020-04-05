<?php

namespace perf2k2\direct\api\entities\ads;

class MobileAppImageAdAdd extends ImageAdAddBase
{
    protected $TrackingUrl;

    public function setTrackingUrl(string $TrackingUrl): MobileAppImageAdAdd
    {
      $this->TrackingUrl = $TrackingUrl;
      return $this;
    }
}
