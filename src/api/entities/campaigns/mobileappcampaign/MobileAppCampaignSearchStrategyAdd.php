<?php

namespace api\entities\campaigns\mobileappcampaign;

use api\enums\campaigns\mobileappcampaign\MobileAppCampaignNetworkStrategyTypeEnum;

class MobileAppCampaignSearchStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(MobileAppCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
