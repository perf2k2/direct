<?php

namespace direct\api\methods;


use direct\api\UpdateMethod;

class CampaignsUpdate extends UpdateMethod 
{
    protected $Campaigns;

    public function setCampaigns(array $Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }
}