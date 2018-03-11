<?php

namespace direct\api\entities\campaigns\textcampaign;

use direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;

class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(TextCampaignSearchStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
