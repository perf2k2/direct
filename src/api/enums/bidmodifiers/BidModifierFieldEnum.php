<?php

namespace direct\api\enums\bidmodifiers;

use direct\api\Enum;

/**
 * @method static BidModifierFieldEnum CampaignId()
 * @method static BidModifierFieldEnum Id()
 * @method static BidModifierFieldEnum AdGroupId()
 * @method static BidModifierFieldEnum Level()
 * @method static BidModifierFieldEnum Type()
 */
final class BidModifierFieldEnum extends Enum
{
    const CampaignId = 'CampaignId';
    const Id = 'Id';
    const AdGroupId = 'AdGroupId';
    const Level = 'Level';
    const Type = 'Type';
}