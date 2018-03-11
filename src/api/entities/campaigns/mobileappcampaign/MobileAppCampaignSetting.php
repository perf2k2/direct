<?php

namespace direct\api\entities\campaigns\mobileappcampaign;

use direct\api\enums\campaigns\mobileappcampaign\MobileAppCampaignSettingsEnum;
use direct\api\Entity;
use direct\api\enums\YesNoEnum;

class MobileAppCampaignSetting extends Entity
{
    protected $Option;
    protected $Value;

    public function __construct(MobileAppCampaignSettingsEnum $Option, YesNoEnum $Value)
    {
      $this->Option = $Option;
      $this->Value = $Value;
    }
}
