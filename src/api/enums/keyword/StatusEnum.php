<?php

namespace perf2k2\direct\api\enums\keyword;

use perf2k2\direct\api\Enum;

/**
 * @method static StatusEnum DRAFT()
 * @method static StatusEnum ACCEPTED()
 * @method static StatusEnum REJECTED()
 * @method static StatusEnum UNKNOWN()
 */
final class StatusEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
    const UNKNOWN = 'UNKNOWN';
}