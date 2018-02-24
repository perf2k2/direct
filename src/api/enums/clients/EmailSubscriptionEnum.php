<?php

namespace api\enums\clients;

use api\Enum;

/**
 * @method static EmailSubscriptionEnum RECEIVE_RECOMMENDATIONS()
 * @method static EmailSubscriptionEnum TRACK_MANAGED_CAMPAIGNS()
 * @method static EmailSubscriptionEnum TRACK_POSITION_CHANGES()
 */
class EmailSubscriptionEnum extends Enum
{
    const RECEIVE_RECOMMENDATIONS = 'RECEIVE_RECOMMENDATIONS';
    const TRACK_MANAGED_CAMPAIGNS = 'TRACK_MANAGED_CAMPAIGNS';
    const TRACK_POSITION_CHANGES = 'TRACK_POSITION_CHANGES';
}