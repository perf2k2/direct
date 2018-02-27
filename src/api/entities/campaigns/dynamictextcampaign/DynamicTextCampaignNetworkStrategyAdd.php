<?php

namespace api\entities\campaigns\dynamictextcampaign;

use api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignNetworkStrategyTypeEnum;

class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    
    public function __construct(DynamicTextCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
