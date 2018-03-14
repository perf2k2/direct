<?php

namespace direct\api\enums\adextensions;

use direct\api\Enum;

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