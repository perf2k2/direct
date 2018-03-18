<?php

namespace direct\api\enums\bidmodifiers;

use direct\api\Enum;

/**
 * @method static RetargetingAdjustmentFieldNames RetargetingConditionId()
 * @method static RetargetingAdjustmentFieldNames BidModifier()
 * @method static RetargetingAdjustmentFieldNames Accessible()
 * @method static RetargetingAdjustmentFieldNames Enabled()
 */
final class RetargetingAdjustmentFieldNames extends Enum
{
    const RetargetingConditionId = 'RetargetingConditionId';
    const BidModifier = 'BidModifier';
    const Accessible = 'Accessible';
    const Enabled = 'Enabled';
}