<?php

namespace api\entities\campaigns\dynamictextcampaign;

class DynamicTextCampaignSearchStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
