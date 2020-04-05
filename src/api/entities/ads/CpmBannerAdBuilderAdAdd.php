<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\entities\ArrayOfString;

class CpmBannerAdBuilderAdAdd extends AdBuilderAdAddBase
{
    protected $Href;
    protected $TrackingPixels;

    public function setHref(string $Href): CpmBannerAdBuilderAdAdd
    {
      $this->Href = $Href;
      return $this;
    }

    public function setTrackingPixels(ArrayOfString $TrackingPixels): CpmBannerAdBuilderAdAdd
    {
        $this->TrackingPixels = $TrackingPixels;
        return $this;
    }
}
