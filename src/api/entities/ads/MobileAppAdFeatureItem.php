<?php

namespace direct\api\entities\ads;

use direct\api\enums\ad\MobileAppFeatureEnum;
use direct\api\Entity;
use direct\api\enums\YesNoEnum;

class MobileAppAdFeatureItem extends Entity
{
    protected $Feature;
    protected $Enabled;

    public function __construct(MobileAppFeatureEnum $Feature, YesNoEnum $Enabled)
    {
      $this->Feature = $Feature;
      $this->Enabled = $Enabled;
    }
}
