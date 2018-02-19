<?php

namespace api\entities\campaigns\textcampaign;

class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

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

}
