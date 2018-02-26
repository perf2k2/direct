<?php

namespace api\entities\campaigns\mobileappcampaign;

class MobileAppCampaignNetworkStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    protected $NetworkDefault;

    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }

    public function setNetworkDefault(StrategyNetworkDefaultAdd $NetworkDefault)
    {
      $this->NetworkDefault = $NetworkDefault;
      return $this;
    }

}
