<?php

namespace api\enums\campaign\textcampaign;

use api\Enum;

/**
 * @method static TextCampaignNetworkStrategyTypeEnum AVERAGE_CPC()
 * @method static TextCampaignNetworkStrategyTypeEnum AVERAGE_CPA()
 * @method static TextCampaignNetworkStrategyTypeEnum WB_MAXIMUM_CONVERSION_RATE()
 * @method static TextCampaignNetworkStrategyTypeEnum MAXIMUM_COVERAGE()
 * @method static TextCampaignNetworkStrategyTypeEnum NETWORK_DEFAULT()
 * @method static TextCampaignNetworkStrategyTypeEnum SERVING_OFF()
 * @method static TextCampaignNetworkStrategyTypeEnum UNKNOWN()
 * @method static TextCampaignNetworkStrategyTypeEnum WB_MAXIMUM_CLICKS()
 * @method static TextCampaignNetworkStrategyTypeEnum WEEKLY_CLICK_PACKAGE()
 * @method static TextCampaignNetworkStrategyTypeEnum AVERAGE_ROI()
 */
class TextCampaignNetworkStrategyTypeEnum extends Enum
{
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    const SERVING_OFF = 'SERVING_OFF';
    const UNKNOWN = 'UNKNOWN';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const AVERAGE_ROI = 'AVERAGE_ROI';
}
