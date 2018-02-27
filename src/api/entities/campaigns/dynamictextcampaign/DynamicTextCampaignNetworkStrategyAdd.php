<?php

namespace api\entities\campaigns\dynamictextcampaign;

class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    
    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
