<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\ads\AdAddItem;


class AdsAdd extends AddMethod
{
    protected $Ads;

    /**
     * @param AdAddItem[] $Ads
     * @return $this
     */
    public function setAds(array $Ads): AdsAdd
    {
        $this->Ads = $Ads;
        return $this;
    }
}