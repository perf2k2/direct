<?php

namespace apientitiescampaignsdynamictextcampaign;

class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    protected $NetworkDefault;

    public function __construct($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }

    public function setBiddingStrategyType($BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
      return $this;
    }

    public function setNetworkDefault($NetworkDefault)
    {
      $this->NetworkDefault = $NetworkDefault;
      return $this;
    }

}
