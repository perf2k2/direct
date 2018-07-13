<?php

namespace perf2k2\direct\api\entities\campaigns\textcampaign;

use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;

class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(TextCampaignSearchStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
