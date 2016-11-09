<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;
use perf2k2\direct\api\UpdateMethod;

class AdsUpdate extends UpdateMethod implements MethodInterface
{
    public $Ads = [];

    public function setAds(array $Ads): self
    {
        $this->Ads = $Ads;
        return $this;
    }
}