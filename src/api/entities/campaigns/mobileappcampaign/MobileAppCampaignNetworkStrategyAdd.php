<?php

namespace perf2k2\direct\api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\enums\campaigns\mobileappcampaign\MobileAppCampaignNetworkStrategyTypeEnum;

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
