<?php

namespace api\entities\campaigns\textcampaign;

use api\enums\campaigns\textcampaign\TextCampaignNetworkStrategyTypeEnum;

class TextCampaignNetworkStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;
    protected $NetworkDefault;

    public function __construct(TextCampaignNetworkStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }

    public function setNetworkDefault(StrategyNetworkDefaultAdd $NetworkDefault)
    {
      $this->NetworkDefault = $NetworkDefault;
      return $this;
    }
}
