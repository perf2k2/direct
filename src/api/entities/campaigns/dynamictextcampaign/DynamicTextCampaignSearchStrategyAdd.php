<?php

namespace perf2k2\direct\api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignSearchStrategyTypeEnum;

class DynamicTextCampaignSearchStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType;

    public function __construct(DynamicTextCampaignSearchStrategyTypeEnum $BiddingStrategyType)
    {
      $this->BiddingStrategyType = $BiddingStrategyType;
    }
}
