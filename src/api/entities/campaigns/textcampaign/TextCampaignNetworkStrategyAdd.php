<?php

namespace perf2k2\direct\api\entities\campaigns\textcampaign;

use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;

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
