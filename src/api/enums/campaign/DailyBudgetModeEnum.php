<?php

namespace api\enums\campaign;

use MyCLabs\Enum\Enum;

/**
 * @method static DailyBudgetModeEnum DISTRIBUTED()
 * @method static DailyBudgetModeEnum STANDARD()
 */
class DailyBudgetModeEnum extends Enum
{
    const DISTRIBUTED = 'DISTRIBUTED';
    const STANDARD = 'STANDARD';
}