<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\Entity;

class DynamicTextCampaignStrategyAdd extends Entity
{
    protected $Search;
    protected $Network;

    public function __construct(DynamicTextCampaignSearchStrategyAdd $Search, DynamicTextCampaignNetworkStrategyAdd $Network)
    {
      $this->Search = $Search;
      $this->Network = $Network;
    }
}
