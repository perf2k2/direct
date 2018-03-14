<?php

namespace direct\api\enums\adgroups;

use direct\api\Enum;

/**
 * @method static AdGroupAppIconStatusSelectionEnum MODERATION()
 * @method static AdGroupAppIconStatusSelectionEnum ACCEPTED()
 * @method static AdGroupAppIconStatusSelectionEnum REJECTED()
 */
final class AdGroupAppIconStatusSelectionEnum extends Enum
{
    const MODERATION = 'MODERATION';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
}