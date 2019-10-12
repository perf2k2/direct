<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\enums\adgroups\CarrierEnum;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\adgroups\DeviceTypeEnum;

class MobileAppAdGroupAdd extends Entity
{
    protected $StoreUrl;
    protected $TargetDeviceType;
    protected $TargetCarrier;
    protected $TargetOperatingSystemVersion;

    /**
     * @param string $StoreUrl
     * @param DeviceTypeEnum[] $TargetDeviceType
     * @param CarrierEnum $TargetCarrier
     * @param string $TargetOperatingSystemVersion
     */
    public function __construct(
        string $StoreUrl,
        array $TargetDeviceType,
        CarrierEnum $TargetCarrier,
        string $TargetOperatingSystemVersion)
    {
      $this->StoreUrl = $StoreUrl;
      $this->TargetDeviceType = $TargetDeviceType;
      $this->TargetCarrier = $TargetCarrier;
      $this->TargetOperatingSystemVersion = $TargetOperatingSystemVersion;
    }
}
