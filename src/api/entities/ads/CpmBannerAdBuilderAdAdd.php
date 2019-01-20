<?php

namespace perf2k2\direct\api\entities\ads;

class CpmBannerAdBuilderAdAdd extends AdBuilderAdAddBase
{
    protected $Href;
    protected $TrackingPixels;

    public function setHref(string $Href)
    {
      $this->Href = $Href;
      return $this;
    }

    public function setTrackingPixels(array $TrackingPixels)
    {
        $this->TrackingPixels = $TrackingPixels;
        return $this;
    }
}
