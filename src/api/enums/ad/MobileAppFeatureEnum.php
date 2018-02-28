<?php

namespace api\enums\ad;

use api\Enum;

/**
 * @method static MobileAppFeatureEnum PRICE()
 * @method static MobileAppFeatureEnum ICON()
 * @method static MobileAppFeatureEnum CUSTOMER_RATING()
 * @method static MobileAppFeatureEnum RATINGS()
 */
class MobileAppFeatureEnum extends Enum
{
    const PRICE = 'PRICE';
    const ICON = 'ICON';
    const CUSTOMER_RATING = 'CUSTOMER_RATING';
    const RATINGS = 'RATINGS';
}
