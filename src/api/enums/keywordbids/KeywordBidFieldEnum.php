<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\keywordbids;

use perf2k2\direct\api\Enum;

/**
 * @method static ServingStatusEnum KeywordId()
 * @method static ServingStatusEnum AdGroupId()
 * @method static ServingStatusEnum CampaignId()
 * @method static ServingStatusEnum ServingStatus()
 * @method static ServingStatusEnum StrategyPriority()
 */
final class KeywordBidFieldEnum extends Enum
{
    const KeywordId = 'KeywordId';
    const AdGroupId = 'AdGroupId';
    const CampaignId = 'CampaignId';
    const ServingStatus = 'ServingStatus';
    const StrategyPriority = 'StrategyPriority';
}