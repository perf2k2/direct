<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class AdsAdd extends AddMethod
{
    protected $Ads;

    public function setAds(array $Ads)
    {
        $this->Ads = $Ads;
        return $this;
    }
}