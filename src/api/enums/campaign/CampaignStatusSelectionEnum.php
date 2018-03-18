<?php

namespace direct\api\enums\campaign;

use direct\api\Enum;

/**
 * @method static CampaignStatusSelectionEnum DRAFT()
 * @method static CampaignStatusSelectionEnum MODERATION()
 * @method static CampaignStatusSelectionEnum ACCEPTED()
 * @method static CampaignStatusSelectionEnum REJECTED()
 * @method static CampaignStatusSelectionEnum UNKNOWN()
 */
final class CampaignStatusSelectionEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
    const UNKNOWN = 'UNKNOWN';
}