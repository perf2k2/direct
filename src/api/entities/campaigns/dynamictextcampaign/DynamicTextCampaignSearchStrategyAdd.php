<?php

namespace apientitiescampaignsdynamictextcampaign;

class DynamicTextCampaignSearchStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }

    public function setBiddingStrategyType($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
      return $this;
    }

}
