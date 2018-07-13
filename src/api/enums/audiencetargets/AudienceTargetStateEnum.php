<?php

namespace perf2k2\direct\api\enums\audiencetargets;

use perf2k2\direct\api\Enum;

/**
 * @method static AudienceTargetStateEnum ON()
 * @method static AudienceTargetStateEnum SUSPENDED()
 * @method static AudienceTargetStateEnum UNKNOWN()
 */
final class AudienceTargetStateEnum extends Enum
{
    const ON = 'ON';
    const SUSPENDED = 'SUSPENDED';
    const UNKNOWN = 'UNKNOWN';
}