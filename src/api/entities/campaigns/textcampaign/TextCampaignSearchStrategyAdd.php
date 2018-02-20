<?php

namespace api\entities\campaigns\textcampaign;

use api\enums\campaigns\textcampaign\TextCampaignSearchStrategyTypeEnum;

class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(TextCampaignSearchStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
