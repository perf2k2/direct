<?php

namespace perf2k2\direct\api\enums;

use perf2k2\direct\api\Enum;

/**
 * @method static PriorityEnum LOW()
 * @method static PriorityEnum NORMAL()
 * @method static PriorityEnum HIGH()
 */
final class PriorityEnum extends Enum
{
    const LOW = 'LOW';
    const NORMAL = 'NORMAL';
    const HIGH = 'HIGH';
}