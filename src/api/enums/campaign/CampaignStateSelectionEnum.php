<?php

namespace direct\api\enums\campaign;

use direct\api\Enum;

/**
 * @method static CampaignStateSelectionEnum ON()
 * @method static CampaignStateSelectionEnum OFF()
 * @method static CampaignStateSelectionEnum SUSPENDED()
 * @method static CampaignStateSelectionEnum ARCHIVED()
 * @method static CampaignStateSelectionEnum CONVERTED()
 * @method static CampaignStateSelectionEnum ENDED()
 * @method static CampaignStateSelectionEnum UNKNOWN()
 */
final class CampaignStateSelectionEnum extends Enum
{
    const ON = 'ON';
    const OFF = 'OFF';
    const SUSPENDED = 'SUSPENDED';
    const ARCHIVED = 'ARCHIVED';
    const CONVERTED = 'CONVERTED';
    const ENDED = 'ENDED';
    const UNKNOWN = 'UNKNOWN';
}