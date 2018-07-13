<?php

namespace perf2k2\direct\api\enums\bidmodifiers;

use perf2k2\direct\api\Enum;

/**
 * @method static BidModifierTypeEnum MOBILE_ADJUSTMENT()
 * @method static BidModifierTypeEnum DEMOGRAPHICS_ADJUSTMENT ()
 * @method static BidModifierTypeEnum RETARGETING_ADJUSTMENT()
 */
final class BidModifierTypeEnum extends Enum
{
    const MOBILE_ADJUSTMENT = 'MOBILE_ADJUSTMENT';
    const DEMOGRAPHICS_ADJUSTMENT  = 'DEMOGRAPHICS_ADJUSTMENT ';
    const RETARGETING_ADJUSTMENT = 'RETARGETING_ADJUSTMENT';
}