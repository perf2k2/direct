<?php

namespace direct\api\entities\campaigns\mobileappcampaign;

use direct\api\enums\campaigns\mobileappcampaign\MobileAppCampaignNetworkStrategyTypeEnum;

class MobileAppCampaignNetworkStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    protected $NetworkDefault;

    public function __construct(MobileAppCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }

    public function setNetworkDefault(StrategyNetworkDefaultAdd $NetworkDefault)
    {
      $this->NetworkDefault = $NetworkDefault;
      return $this;
    }

}
