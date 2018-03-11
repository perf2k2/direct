<?php

namespace direct\api\enums\campaign;

use direct\api\Enum;

/**
 * @method static DailyBudgetModeEnum DISTRIBUTED()
 * @method static DailyBudgetModeEnum STANDARD()
 */
class DailyBudgetModeEnum extends Enum
{
    const DISTRIBUTED = 'DISTRIBUTED';
    const STANDARD = 'STANDARD';
}