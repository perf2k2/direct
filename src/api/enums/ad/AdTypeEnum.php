<?php

namespace perf2k2\direct\api\enums\ad;

use perf2k2\direct\api\Enum;

/**
 * @method static AdTypeEnum TEXT_AD()
 * @method static AdTypeEnum MOBILE_APP_AD()
 * @method static AdTypeEnum DYNAMIC_TEXT_AD()
 * @method static AdTypeEnum IMAGE_AD()
 * @method static AdTypeEnum TEXT_IMAGE_AD()
 * @method static AdTypeEnum MOBILE_APP_IMAGE_AD()
 * @method static AdTypeEnum TEXT_AD_BUILDER_AD()
 * @method static AdTypeEnum MOBILE_APP_AD_BUILDER_AD()
 */
final class AdTypeEnum extends Enum
{
    const TEXT_AD = 'TEXT_AD';
    const MOBILE_APP_AD = 'MOBILE_APP_AD';
    const DYNAMIC_TEXT_AD = 'DYNAMIC_TEXT_AD';
    const IMAGE_AD = 'IMAGE_AD';
    const TEXT_IMAGE_AD = 'TEXT_IMAGE_AD';
    const MOBILE_APP_IMAGE_AD = 'MOBILE_APP_IMAGE_AD';
    const TEXT_AD_BUILDER_AD = 'TEXT_AD_BUILDER_AD';
    const MOBILE_APP_AD_BUILDER_AD = 'MOBILE_APP_AD_BUILDER_AD';
}