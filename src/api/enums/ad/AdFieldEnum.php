<?php

namespace direct\api\enums\ad;

use direct\api\Enum;

/**
 * @method static AdFieldEnum Id()
 * @method static AdFieldEnum CampaignId()
 * @method static AdFieldEnum AdGroupId()
 * @method static AdFieldEnum Status()
 * @method static AdFieldEnum StatusClarification()
 * @method static AdFieldEnum State()
 * @method static AdFieldEnum AdCategories()
 * @method static AdFieldEnum AgeLabel()
 * @method static AdFieldEnum Type()
 */
final class AdFieldEnum extends Enum
{
    const Id = 'Id';
    const CampaignId = 'CampaignId';
    const AdGroupId = 'AdGroupId';
    const Status = 'Status';
    const StatusClarification = 'StatusClarification';
    const State = 'State';
    const AdCategories = 'AdCategories';
    const AgeLabel = 'AgeLabel';
    const Type = 'Type';
}