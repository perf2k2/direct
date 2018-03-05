<?php

namespace perf2k2\direct\api\methods;


use perf2k2\direct\api\UpdateMethod;

class CampaignsUpdate extends UpdateMethod 
{
    protected $Campaigns;

    public function setCampaigns(array $Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }
}