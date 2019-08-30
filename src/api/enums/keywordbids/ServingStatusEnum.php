<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\keywordbids;

use perf2k2\direct\api\Enum;

/**
 * @method static ServingStatusEnum DRAFT()
 * @method static ServingStatusEnum MODERATION()
 * @method static ServingStatusEnum PREACCEPTED()
 * @method static ServingStatusEnum ACCEPTED()
 * @method static ServingStatusEnum REJECTED()
 */
final class ServingStatusEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const PREACCEPTED = 'PREACCEPTED';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
}