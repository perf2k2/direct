<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\enums\campaigns\dynamictextcampaign\DynamicTextCampaignSettingsEnum;
use direct\api\Entity;
use direct\api\enums\YesNoEnum;

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
