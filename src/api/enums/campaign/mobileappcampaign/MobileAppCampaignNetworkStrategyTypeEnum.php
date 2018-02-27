<?php

namespace api\enums\campaigns\mobileappcampaign;

use api\Enum;

/**
 * @method static MobileAppCampaignNetworkStrategyTypeEnum NETWORK_DEFAULT()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum MAXIMUM_COVERAGE()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum AVERAGE_CPC()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum AVERAGE_CPI()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum WB_MAXIMUM_APP_INSTALLS()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum SERVING_OFF()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum UNKNOWN()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static MobileAppCampaignNetworkStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 */
class MobileAppCampaignNetworkStrategyTypeEnum extends Enum
{
    const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPI = 'AVERAGE_CPI';
    const WB_MAXIMUM_APP_INSTALLS = 'WB_MAXIMUM_APP_INSTALLS';
    const SERVING_OFF = 'SERVING_OFF';
    const UNKNOWN = 'UNKNOWN';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
}
