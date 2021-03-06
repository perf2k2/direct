<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\enums\ad\MobileAppFeatureEnum;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

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
