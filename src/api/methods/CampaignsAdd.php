<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class CampaignsAdd extends AddMethod
{
    protected $Campaigns;

    public function setCampaigns(array $Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }
}