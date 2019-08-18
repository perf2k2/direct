<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\keywordbids;

use perf2k2\direct\api\Enum;

/**
 * @method static ServingStatusEnum Bid()
 * @method static ServingStatusEnum AuctionBids()
 */
final class KeywordBidSearchFieldEnum extends Enum
{
    const Bid = 'Bid';
    const AuctionBids = 'AuctionBids';
}