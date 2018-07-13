<?php

namespace perf2k2\direct\api\enums\keyword;

use perf2k2\direct\api\Enum;

/**
 * @method static KeywordStatusSelectionEnum ON()
 * @method static KeywordStatusSelectionEnum OFF()
 * @method static KeywordStatusSelectionEnum SUSPENDED()
 */
final class KeywordStatusSelectionEnum extends Enum
{
    const ON = 'ON';
    const OFF = 'OFF';
    const SUSPENDED = 'SUSPENDED';
}