<?php

namespace direct\api\entities\campaigns\mobileappcampaign;

use direct\api\Entity;

class MobileAppCampaignAddItem extends Entity
{
    protected $BiddingStrategy;
    protected $Settings;

    public function __construct(MobileAppCampaignSetting $BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
    }
}
