<?php

namespace direct\api\methods;


use direct\api\UpdateMethod;

class AdsUpdate extends UpdateMethod
{
    protected $Ads = [];

    public function setAds(array $Ads): self
    {
        $this->Ads = $Ads;
        return $this;
    }
}