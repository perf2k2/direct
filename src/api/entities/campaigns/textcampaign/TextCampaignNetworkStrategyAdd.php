<?php

namespace api\entities\campaigns\textcampaign;

class TextCampaignNetworkStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    protected $NetworkDefault;

    public function __construct($BiddingStrategyType)
    {
      parent::__construct();
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
