<?php

namespace direct\api\enums\adgroups;

use direct\api\Enum;

/**
 * @method static MobileAppAdGroupFieldEnum StoreUrl()
 * @method static MobileAppAdGroupFieldEnum TargetDeviceType()
 * @method static MobileAppAdGroupFieldEnum TargetCarrier()
 * @method static MobileAppAdGroupFieldEnum TargetOperatingSystemVersion()
 * @method static MobileAppAdGroupFieldEnum AppIconModeration()
 * @method static MobileAppAdGroupFieldEnum AppOperatingSystemType()
 * @method static MobileAppAdGroupFieldEnum AppAvailabilityStatus()
 */
final class MobileAppAdGroupFieldEnum extends Enum
{
    const StoreUrl = 'StoreUrl';
    const TargetDeviceType = 'TargetDeviceType';
    const TargetCarrier = 'TargetCarrier';
    const TargetOperatingSystemVersion = 'TargetOperatingSystemVersion';
    const AppIconModeration = 'AppIconModeration';
    const AppOperatingSystemType = 'AppOperatingSystemType';
    const AppAvailabilityStatus = 'AppAvailabilityStatus';
}