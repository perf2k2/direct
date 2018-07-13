<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\campaign;

use perf2k2\direct\api\Enum;

/**
 * @method static CampaignTypeEnum TEXT_CAMPAIGN()
 * @method static CampaignTypeEnum MOBILE_APP_CAMPAIGN()
 * @method static CampaignTypeEnum DYNAMIC_TEXT_CAMPAIGN()
 * @method static CampaignTypeEnum SMART_BANNER_CAMPAIGN()
 * @method static CampaignTypeEnum MCBANNER_CAMPAIGN()
 * @method static CampaignTypeEnum CPM_BANNER_CAMPAIGN()
 */
final class CampaignTypeEnum extends Enum
{
    const TEXT_CAMPAIGN = 'TEXT_CAMPAIGN';
    const MOBILE_APP_CAMPAIGN = 'MOBILE_APP_CAMPAIGN';
    const DYNAMIC_TEXT_CAMPAIGN = 'DYNAMIC_TEXT_CAMPAIGN';
    const SMART_BANNER_CAMPAIGN = 'SMART_BANNER_CAMPAIGN';
    const MCBANNER_CAMPAIGN = 'MCBANNER_CAMPAIGN';
    const CPM_BANNER_CAMPAIGN = 'CPM_BANNER_CAMPAIGN';
}