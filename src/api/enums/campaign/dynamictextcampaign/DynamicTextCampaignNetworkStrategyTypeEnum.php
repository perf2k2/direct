<?php

namespace api\enums\campaigns\dynamictextcampaign;

use api\Enum;

/**
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum NETWORK_DEFAULT()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum MAXIMUM_COVERAGE()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum WB_MAXIMUM_CONVERSION_RATE()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum AVERAGE_CPC()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum AVERAGE_CPA()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum AVERAGE_ROI()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum SERVING_OFF()
 * @method static DynamicTextCampaignNetworkStrategyTypeEnum UNKNOWN()
 */
class DynamicTextCampaignNetworkStrategyTypeEnum extends Enum
{
    const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const AVERAGE_ROI = 'AVERAGE_ROI';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const SERVING_OFF = 'SERVING_OFF';
    const UNKNOWN = 'UNKNOWN';
}
