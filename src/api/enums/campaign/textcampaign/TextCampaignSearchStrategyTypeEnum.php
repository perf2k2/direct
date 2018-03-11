<?php

namespace direct\api\enums\campaign\textcampaign;

use direct\api\Enum;

/**
 * @method static TextCampaignSearchStrategyTypeEnum AVERAGE_CPC()
 * @method static TextCampaignSearchStrategyTypeEnum AVERAGE_CPA()
 * @method static TextCampaignSearchStrategyTypeEnum WB_MAXIMUM_CONVERSION_RATE()
 * @method static TextCampaignSearchStrategyTypeEnum HIGHEST_POSITION()
 * @method static TextCampaignSearchStrategyTypeEnum IMPRESSIONS_BELOW_SEARCH()
 * @method static TextCampaignSearchStrategyTypeEnum SERVING_OFF()
 * @method static TextCampaignSearchStrategyTypeEnum UNKNOWN()
 * @method static TextCampaignSearchStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static TextCampaignSearchStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 * @method static TextCampaignSearchStrategyTypeEnum AVERAGE_ROI()
 */
class TextCampaignSearchStrategyTypeEnum extends Enum
{
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const HIGHEST_POSITION = 'HIGHEST_POSITION';
    const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    const SERVING_OFF = 'SERVING_OFF';
    const UNKNOWN = 'UNKNOWN';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const AVERAGE_ROI = 'AVERAGE_ROI';
}
