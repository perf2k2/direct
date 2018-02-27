<?php

namespace api\entities\campaigns\mobileappcampaign;

use api\enums\campaigns\mobileappcampaign\MobileAppCampaignSettingsEnum;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

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
