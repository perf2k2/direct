<?php

namespace api\entities\campaigns\textcampaign;

use api\enums\campaign\textcampaign\TextCampaignSettingsEnum;
use perf2k2\direct\api\enums\YesNoEnum;

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