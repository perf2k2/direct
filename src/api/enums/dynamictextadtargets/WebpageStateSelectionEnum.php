<?php

namespace direct\api\enums\dynamictextadtargets;

use direct\api\Enum;

/**
 * @method static WebpageStateSelectionEnum ON()
 * @method static WebpageStateSelectionEnum OFF()
 * @method static WebpageStateSelectionEnum SUSPENDED()
 * @method static WebpageStateSelectionEnum DELETED()
 */
final class WebpageStateSelectionEnum extends Enum
{
    const ON = 'ON';
    const OFF = 'OFF';
    const SUSPENDED = 'SUSPENDED';
    const DELETED = 'DELETED';
}