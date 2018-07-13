<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\reports;

use perf2k2\direct\api\Enum;

/**
 * @method static FilterOperatorEnum EQUALS()
 * @method static FilterOperatorEnum NOT_EQUALS()
 * @method static FilterOperatorEnum IN()
 * @method static FilterOperatorEnum NOT_IN()
 * @method static FilterOperatorEnum LESS_THAN()
 * @method static FilterOperatorEnum GREATER_THAN()
 * @method static FilterOperatorEnum STARTS_WITH_IGNORE_CASE()
 * @method static FilterOperatorEnum DOES_NOT_START_WITH_IGNORE_CASE()
 * @method static FilterOperatorEnum STARTS_WITH_ANY_IGNORE_CASE()
 * @method static FilterOperatorEnum DOES_NOT_START_WITH_ALL_IGNORE_CASE()
 */
class FilterOperatorEnum extends Enum
{
    const EQUALS = 'EQUALS';
    const NOT_EQUALS = 'NOT_EQUALS';
    const IN = 'IN';
    const NOT_IN = 'NOT_IN';
    const LESS_THAN = 'LESS_THAN';
    const GREATER_THAN = 'GREATER_THAN';
    const STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';
    const DOES_NOT_START_WITH_IGNORE_CASE = 'DOES_NOT_START_WITH_IGNORE_CASE';
    const STARTS_WITH_ANY_IGNORE_CASE = 'STARTS_WITH_ANY_IGNORE_CASE';
    const DOES_NOT_START_WITH_ALL_IGNORE_CASE = 'DOES_NOT_START_WITH_ALL_IGNORE_CASE';
}