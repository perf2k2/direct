<?php

namespace perf2k2\direct\api\enums\adgroups;

use perf2k2\direct\api\Enum;

/**
 * @method static AdGroupTypesEnum TEXT_AD_GROUP()
 * @method static AdGroupTypesEnum MOBILE_APP_AD_GROUP()
 * @method static AdGroupTypesEnum DYNAMIC_TEXT_AD_GROUP()
 * @method static AdGroupTypesEnum CPM_BANNER_AD_GROUP()
 */
final class AdGroupTypesEnum extends Enum
{
    const TEXT_AD_GROUP = 'TEXT_AD_GROUP';
    const MOBILE_APP_AD_GROUP = 'MOBILE_APP_AD_GROUP';
    const DYNAMIC_TEXT_AD_GROUP = 'DYNAMIC_TEXT_AD_GROUP';
    const CPM_BANNER_AD_GROUP = 'CPM_BANNER_AD_GROUP';
}