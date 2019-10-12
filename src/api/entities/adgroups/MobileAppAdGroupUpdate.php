<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\adgroups\CarrierEnum;
use perf2k2\direct\api\enums\adgroups\DeviceTypeEnum;

class MobileAppAdGroupUpdate extends Entity
{
    protected $TargetDeviceType;
    protected $TargetCarrier;
    protected $TargetOperatingSystemVersion;

    /**
     * @param DeviceTypeEnum[] $TargetDeviceType
     * @return MobileAppAdGroupUpdate
     */
    public function setTargetDeviceType(array $TargetDeviceType = []): MobileAppAdGroupUpdate
    {
      $this->TargetDeviceType = $TargetDeviceType;
      return $this;
    }

    public function setTargetCarrier(CarrierEnum $TargetCarrier): MobileAppAdGroupUpdate
    {
      $this->TargetCarrier = $TargetCarrier;
      return $this;
    }

    public function setTargetOperatingSystemVersion(string $TargetOperatingSystemVersion): MobileAppAdGroupUpdate
    {
      $this->TargetOperatingSystemVersion = $TargetOperatingSystemVersion;
      return $this;
    }
}
