<?php

namespace direct\api\entities\adgroups;

use direct\api\enums\adgroups\CarrierEnum;
use direct\api\Entity;

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
