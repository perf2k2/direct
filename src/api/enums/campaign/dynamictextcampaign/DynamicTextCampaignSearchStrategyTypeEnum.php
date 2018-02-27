<?php

namespace api\enums\campaigns\dynamictextcampaign;

use api\Enum;

/**
 * @method static DynamicTextCampaignSearchStrategyTypeEnum AVERAGE_CPC()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum AVERAGE_CPA()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum WB_MAXIMUM_CONVERSION_RATE()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum HIGHEST_POSITION()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum IMPRESSIONS_BELOW_SEARCH()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum UNKNOWN()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum AVERAGE_ROI()
 * @method static DynamicTextCampaignSearchStrategyTypeEnum SERVING_OFF()
 */
class DynamicTextCampaignSearchStrategyTypeEnum extends Enum
{
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const HIGHEST_POSITION = 'HIGHEST_POSITION';
    const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    const UNKNOWN = 'UNKNOWN';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const AVERAGE_ROI = 'AVERAGE_ROI';
    const SERVING_OFF = 'SERVING_OFF';
}
