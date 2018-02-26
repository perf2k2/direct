<?php

namespace api\entities\campaigns\mobileappcampaign;

class MobileAppCampaignSearchStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
