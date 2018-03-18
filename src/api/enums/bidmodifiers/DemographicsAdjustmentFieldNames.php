<?php

namespace direct\api\enums\bidmodifiers;

use direct\api\Enum;

/**
 * @method static DemographicsAdjustmentFieldNames Gender()
 * @method static DemographicsAdjustmentFieldNames Age()
 * @method static DemographicsAdjustmentFieldNames BidModifier()
 * @method static DemographicsAdjustmentFieldNames Enabled()
 */
final class DemographicsAdjustmentFieldNames extends Enum
{
    const Gender = 'Gender';
    const Age = 'Age';
    const BidModifier = 'BidModifier';
    const Enabled = 'Enabled';
}