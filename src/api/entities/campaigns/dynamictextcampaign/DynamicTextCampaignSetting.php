<?php

namespace api\entities\campaigns\dynamictextcampaign;

use api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignSettingsEnum;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

class DynamicTextCampaignSetting extends Entity
{
    protected $Option;
    protected $Value;

    public function __construct(DynamicTextCampaignSettingsEnum $Option, YesNoEnum $Value)
    {
      $this->Option = $Option;
      $this->Value = $Value;
    }
}
