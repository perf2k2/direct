<?php
declare(strict_types=1);

namespace api\enums\keywordbids;

use perf2k2\direct\api\Enum;

/**
 * @method static ServingStatusEnum Bid()
 * @method static ServingStatusEnum Coverage()
 */
final class KeywordBidNetworkFieldEnum extends Enum
{
    const Bid = 'Bid';
    const Coverage = 'Coverage';
}