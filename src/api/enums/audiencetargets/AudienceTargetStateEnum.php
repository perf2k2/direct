<?php

namespace direct\api\enums\audiencetargets;

use direct\api\Enum;

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