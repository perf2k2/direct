<?php

namespace direct\api\enums\campaigns\mobileappcampaign;

use direct\api\Enum;

/**
 * @method static MobileAppCampaignSettingsEnum ADD_TO_FAVORITES()
 * @method static MobileAppCampaignSettingsEnum ENABLE_AREA_OF_INTEREST_TARGETING()
 * @method static MobileAppCampaignSettingsEnum ENABLE_BEHAVIORAL_TARGETING()
 * @method static MobileAppCampaignSettingsEnum REQUIRE_SERVICING()
 * @method static MobileAppCampaignSettingsEnum ENABLE_AUTOFOCUS()
 * @method static MobileAppCampaignSettingsEnum MAINTAIN_NETWORK_CPC()
 */
class MobileAppCampaignSettingsEnum extends Enum
{
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
}
