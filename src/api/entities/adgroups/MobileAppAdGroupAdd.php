<?php

namespace api\entities\adgroups;

use api\enums\adgroups\CarrierEnum;
use perf2k2\direct\api\Entity;

class MobileAppAdGroupAdd extends Entity
{
    protected $StoreUrl;
    protected $TargetDeviceType;
    protected $TargetCarrier;
    protected $TargetOperatingSystemVersion;

    public function __construct(string $StoreUrl, array $TargetDeviceType, CarrierEnum $TargetCarrier, string $TargetOperatingSystemVersion)
    {
      $this->StoreUrl = $StoreUrl;
      $this->TargetDeviceType = $TargetDeviceType;
      $this->TargetCarrier = $TargetCarrier;
      $this->TargetOperatingSystemVersion = $TargetOperatingSystemVersion;
    }
}
