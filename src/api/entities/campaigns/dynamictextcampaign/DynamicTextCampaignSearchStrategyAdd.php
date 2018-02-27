<?php

namespace api\entities\campaigns\dynamictextcampaign;

use api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignSearchStrategyTypeEnum;

class DynamicTextCampaignSearchStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(DynamicTextCampaignSearchStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
