<?php

namespace direct\api\enums\campaign;

use direct\api\Enum;

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