<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class AdsAdd extends AddMethod
{
    protected $Ads;

    public function setAds(array $Ads)
    {
        $this->Ads = $Ads;
        return $this;
    }
}