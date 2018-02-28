<?php

namespace api\entities\ads;

use perf2k2\direct\api\Entity;

class MobileAppAdFeatureItem extends Entity
{
    protected $Feature;
    protected $Enabled;

    public function __construct($Feature, $Enabled)
    {
      $this->Feature = $Feature;
      $this->Enabled = $Enabled;
    }
}
