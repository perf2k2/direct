<?php

namespace perf2k2\direct\api\enums\bidmodifiers;

use perf2k2\direct\api\Enum;

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