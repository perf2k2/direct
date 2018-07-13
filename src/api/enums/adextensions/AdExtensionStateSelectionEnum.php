<?php

namespace perf2k2\direct\api\enums\adextensions;

use perf2k2\direct\api\Enum;

/**
 * @method static AdExtensionStateSelectionEnum ON()
 * @method static AdExtensionStateSelectionEnum DELETED()
 * @method static AdExtensionStateSelectionEnum UNKNOWN()
 */
class AdExtensionStateSelectionEnum extends Enum
{
    const ON = 'ON';
    const DELETED = 'DELETED';
    const UNKNOWN = 'UNKNOWN';
}