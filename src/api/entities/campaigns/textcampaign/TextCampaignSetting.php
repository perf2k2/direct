<?php

namespace direct\api\entities\campaigns\textcampaign;

use direct\api\enums\campaign\textcampaign\TextCampaignSettingsEnum;
use direct\api\enums\YesNoEnum;

class TextCampaignSetting
{
    protected $Option;
    protected $Value;

    public function __construct(TextCampaignSettingsEnum $Option, YesNoEnum $Value)
    {
      $this->Option = $Option;
      $this->Value = $Value;
    }
}