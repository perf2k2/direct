<?php

namespace api\enums\campaign\textcampaign;

use api\Enum;

/**
 * @method static TextCampaignSettingsEnum EXCLUDE_PAUSED_COMPETING_ADS()
 * @method static TextCampaignSettingsEnum ADD_OPENSTAT_TAG()
 * @method static TextCampaignSettingsEnum ADD_METRICA_TAG()
 * @method static TextCampaignSettingsEnum ADD_TO_FAVORITES()
 * @method static TextCampaignSettingsEnum ENABLE_AREA_OF_INTEREST_TARGETING()
 * @method static TextCampaignSettingsEnum ENABLE_SITE_MONITORING()
 * @method static TextCampaignSettingsEnum ENABLE_BEHAVIORAL_TARGETING()
 * @method static TextCampaignSettingsEnum ENABLE_AUTOFOCUS()
 * @method static TextCampaignSettingsEnum REQUIRE_SERVICING()
 * @method static TextCampaignSettingsEnum ENABLE_RELATED_KEYWORDS()
 * @method static TextCampaignSettingsEnum ENABLE_EXTENDED_AD_TITLE()
 * @method static TextCampaignSettingsEnum MAINTAIN_NETWORK_CPC()
 * @method static TextCampaignSettingsEnum ENABLE_COMPANY_INFO()
 */
class TextCampaignSettingsEnum extends Enum
{
    const EXCLUDE_PAUSED_COMPETING_ADS = 'EXCLUDE_PAUSED_COMPETING_ADS';
    const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const ENABLE_RELATED_KEYWORDS = 'ENABLE_RELATED_KEYWORDS';
    const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
    const ENABLE_COMPANY_INFO = 'ENABLE_COMPANY_INFO';
}
