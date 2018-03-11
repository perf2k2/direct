<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class CampaignsAdd extends AddMethod
{
    protected $Campaigns;

    public function setCampaigns(array $Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }
}