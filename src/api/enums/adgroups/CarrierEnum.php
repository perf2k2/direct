<?php

namespace api\enums\adgroups;

use api\Enum;

/**
 * @method static CarrierEnum WI_FI_ONLY()
 * @method static CarrierEnum WI_FI_AND_CELLULAR()
 */
class CarrierEnum extends Enum
{
    const WI_FI_ONLY = 'WI_FI_ONLY';
    const WI_FI_AND_CELLULAR  = 'WI_FI_AND_CELLULAR ';
}