<?php

namespace perf2k2\direct\api\enums\dynamictextadtargets;

use perf2k2\direct\api\Enum;

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