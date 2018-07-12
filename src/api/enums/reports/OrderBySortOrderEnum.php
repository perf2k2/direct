<?php
declare(strict_types=1);

namespace api\enums\reports;

use direct\api\Enum;

/**
 * @method static OrderBySortOrderEnum ASCENDING()
 * @method static OrderBySortOrderEnum DESCENDING()
 */
class OrderBySortOrderEnum extends Enum
{
    const ASCENDING = 'ASCENDING';
    const DESCENDING = 'DESCENDING';
}