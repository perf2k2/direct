<?php

namespace perf2k2\direct\api\enums\ad;

use api\Enum;

/**
 * @method static AdStateSelectionEnum ON()
 * @method static AdStateSelectionEnum OFF()
 * @method static AdStateSelectionEnum SUSPENDED()
 * @method static AdStateSelectionEnum ARCHIVED()
 * @method static AdStateSelectionEnum OFF_BY_MONITORING()
 */
final class AdStateSelectionEnum extends Enum
{
    const ON = 'ON';
    const OFF = 'OFF';
    const SUSPENDED = 'SUSPENDED';
    const ARCHIVED = 'ARCHIVED';
    const OFF_BY_MONITORING = 'OFF_BY_MONITORING';
}