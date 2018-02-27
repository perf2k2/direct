<?php

namespace api\enums\campaigns\dynamictextcampaign;

use api\Enum;

/**
 * @method static DynamicTextCampaignSettingsEnum ADD_OPENSTAT_TAG()
 * @method static DynamicTextCampaignSettingsEnum ADD_METRICA_TAG()
 * @method static DynamicTextCampaignSettingsEnum ADD_TO_FAVORITES()
 * @method static DynamicTextCampaignSettingsEnum ENABLE_AREA_OF_INTEREST_TARGETING()
 * @method static DynamicTextCampaignSettingsEnum ENABLE_SITE_MONITORING()
 * @method static DynamicTextCampaignSettingsEnum ENABLE_BEHAVIORAL_TARGETING()
 * @method static DynamicTextCampaignSettingsEnum REQUIRE_SERVICING()
 * @method static DynamicTextCampaignSettingsEnum ENABLE_EXTENDED_AD_TITLE()
 * @method static DynamicTextCampaignSettingsEnum ENABLE_COMPANY_INFO()
 */
class DynamicTextCampaignSettingsEnum extends Enum
{
    const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    const ENABLE_COMPANY_INFO = 'ENABLE_COMPANY_INFO';
}
