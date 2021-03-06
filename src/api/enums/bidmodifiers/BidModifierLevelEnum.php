<?php

namespace perf2k2\direct\api\enums\bidmodifiers;

use perf2k2\direct\api\Enum;

/**
 * @method static BidModifierLevelEnum CAMPAIGN()
 * @method static BidModifierLevelEnum AD_GROUP()
 */
final class BidModifierLevelEnum extends Enum
{
    const CAMPAIGN = 'CAMPAIGN';
    const AD_GROUP = 'AD_GROUP';
}