<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignNetworkStrategyTypeEnum;

class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    
    public function __construct(DynamicTextCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
