<?php

namespace perf2k2\direct\api\enums\campaigns\mobileappcampaign;

use perf2k2\direct\api\Enum;

/**
 * @method static MobileAppCampaignSearchStrategyTypeEnum HIGHEST_POSITION()
 * @method static MobileAppCampaignSearchStrategyTypeEnum AVERAGE_CPC()
 * @method static MobileAppCampaignSearchStrategyTypeEnum AVERAGE_CPI()
 * @method static MobileAppCampaignSearchStrategyTypeEnum WB_MAXIMUM_APP_INSTALLS()
 * @method static MobileAppCampaignSearchStrategyTypeEnum SERVING_OFF()
 * @method static MobileAppCampaignSearchStrategyTypeEnum UNKNOWN()
 * @method static MobileAppCampaignSearchStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static MobileAppCampaignSearchStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 */
class MobileAppCampaignSearchStrategyTypeEnum extends Enum
{
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPI = 'AVERAGE_CPI';
    const WB_MAXIMUM_APP_INSTALLS = 'WB_MAXIMUM_APP_INSTALLS';
    const HIGHEST_POSITION = 'HIGHEST_POSITION';
    const SERVING_OFF = 'SERVING_OFF';
    const UNKNOWN = 'UNKNOWN';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
}
