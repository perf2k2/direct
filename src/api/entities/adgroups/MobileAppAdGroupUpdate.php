<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\adgroups\CarrierEnum;

class MobileAppAdGroupUpdate extends Entity
{
    protected $TargetDeviceType;
    protected $TargetCarrier;
    protected $TargetOperatingSystemVersion;
    
    public function setTargetDeviceType(array $TargetDeviceType = [])
    {
      $this->TargetDeviceType = $TargetDeviceType;
      return $this;
    }

    public function setTargetCarrier(CarrierEnum $TargetCarrier)
    {
      $this->TargetCarrier = $TargetCarrier;
      return $this;
    }

    public function setTargetOperatingSystemVersion(string $TargetOperatingSystemVersion)
    {
      $this->TargetOperatingSystemVersion = $TargetOperatingSystemVersion;
      return $this;
    }
}
