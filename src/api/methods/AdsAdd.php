<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class AdsAdd extends AddMethod implements MethodInterface
{
    protected $Ads;

    public function setAds(array $Ads)
    {
        $this->Ads = $Ads;
        return $this;
    }
}