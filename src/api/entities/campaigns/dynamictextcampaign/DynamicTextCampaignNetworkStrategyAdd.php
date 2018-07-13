<?php

namespace perf2k2\direct\api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignNetworkStrategyTypeEnum;

class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    
    public function __construct(DynamicTextCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
