<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\reports;

use perf2k2\direct\api\Enum;

/**
 * @method static OrderBySortOrderEnum ASCENDING()
 * @method static OrderBySortOrderEnum DESCENDING()
 */
class OrderBySortOrderEnum extends Enum
{
    const ASCENDING = 'ASCENDING';
    const DESCENDING = 'DESCENDING';
}