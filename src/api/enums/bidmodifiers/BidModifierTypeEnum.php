<?php

namespace direct\api\enums\bidmodifiers;

use direct\api\Enum;

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