<?php

namespace perf2k2\direct\api\enums\campaign;

use perf2k2\direct\api\Enum;

/**
 * @method static TextCampaignFieldEnum Settings()
 * @method static TextCampaignFieldEnum CounterIds()
 * @method static TextCampaignFieldEnum RelevantKeywords()
 * @method static TextCampaignFieldEnum BiddingStrategy()
 */
final class TextCampaignFieldEnum extends Enum
{
    const Settings = 'Settings';
    const CounterIds = 'CounterIds';
    const RelevantKeywords = 'RelevantKeywords';
    const BiddingStrategy = 'BiddingStrategy';
}