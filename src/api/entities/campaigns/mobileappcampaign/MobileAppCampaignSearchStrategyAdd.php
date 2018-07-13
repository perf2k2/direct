<?php

namespace perf2k2\direct\api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\enums\campaigns\mobileappcampaign\MobileAppCampaignNetworkStrategyTypeEnum;

class MobileAppCampaignSearchStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(MobileAppCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
