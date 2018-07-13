<?php

namespace perf2k2\direct\api\enums\campaign;

use perf2k2\direct\api\Enum;

/**
 * @method static DailyBudgetModeEnum DISTRIBUTED()
 * @method static DailyBudgetModeEnum STANDARD()
 */
class DailyBudgetModeEnum extends Enum
{
    const DISTRIBUTED = 'DISTRIBUTED';
    const STANDARD = 'STANDARD';
}