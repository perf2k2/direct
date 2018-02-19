<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\enums\YesNoEnum;

class TextCampaignSetting
{
    protected $Option;
    protected $Value;

    public function __construct($Option, YesNoEnum $Value)
    {
      $this->Option = $Option;
      $this->Value = $Value;
    }
}