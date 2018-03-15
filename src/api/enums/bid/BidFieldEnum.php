<?php

namespace direct\api\enums\bid;

use direct\api\Enum;

/**
 * @method static BidFieldEnum CampaignId()
 * @method static BidFieldEnum AdGroupId()
 * @method static BidFieldEnum KeywordId()
 * @method static BidFieldEnum Bid()
 * @method static BidFieldEnum ContextBid()
 * @method static BidFieldEnum StrategyPriority()
 * @method static BidFieldEnum CompetitorsBids()
 * @method static BidFieldEnum SearchPrices()
 * @method static BidFieldEnum ContextCoverage()
 * @method static BidFieldEnum MinSearchPrice()
 * @method static BidFieldEnum CurrentSearchPrice()
 * @method static BidFieldEnum AuctionBids()
 */
final class BidFieldEnum extends Enum
{
    const CampaignId = 'CampaignId';
    const AdGroupId = 'AdGroupId';
    const KeywordId = 'KeywordId';
    const Bid = 'Bid';
    const ContextBid = 'ContextBid';
    const StrategyPriority = 'StrategyPriority';
    const CompetitorsBids = 'CompetitorsBids';
    const SearchPrices = 'SearchPrices';
    const ContextCoverage = 'ContextCoverage';
    const MinSearchPrice = 'MinSearchPrice';
    const CurrentSearchPrice = 'CurrentSearchPrice';
    const AuctionBids = 'AuctionBids';
}