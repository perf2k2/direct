<?php

namespace direct\api\enums\adgroups;

use direct\api\Enum;

/**
 * @method static AdGroupFieldEnum Id()
 * @method static AdGroupFieldEnum Name()
 * @method static AdGroupFieldEnum CampaignId()
 * @method static AdGroupFieldEnum RegionIds()
 * @method static AdGroupFieldEnum NegativeKeywords()
 * @method static AdGroupFieldEnum TrackingParams()
 * @method static AdGroupFieldEnum Status()
 * @method static AdGroupFieldEnum Type()
 * @method static AdGroupFieldEnum Subtype()
 */
final class AdGroupFieldEnum extends Enum
{
    const Id = 'Id';
    const Name = 'Name';
    const CampaignId = 'CampaignId';
    const RegionIds = 'RegionIds';
    const NegativeKeywords = 'NegativeKeywords';
    const TrackingParams = 'TrackingParams';
    const Status = 'Status';
    const Type = 'Type';
    const Subtype = 'Subtype';
}