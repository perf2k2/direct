<?php

namespace direct\api\enums\campaign;

use direct\api\Enum;

/**
 * @method static CampaignFieldEnum Id()
 * @method static CampaignFieldEnum Name()
 * @method static CampaignFieldEnum ClientInfo()
 * @method static CampaignFieldEnum StartDate()
 * @method static CampaignFieldEnum EndDate()
 * @method static CampaignFieldEnum TimeTargeting()
 * @method static CampaignFieldEnum TimeZone()
 * @method static CampaignFieldEnum NegativeKeywords()
 * @method static CampaignFieldEnum BlockedIps()
 * @method static CampaignFieldEnum ExcludedSites()
 * @method static CampaignFieldEnum DailyBudget()
 * @method static CampaignFieldEnum Notification()
 * @method static CampaignFieldEnum Type()
 * @method static CampaignFieldEnum Status()
 * @method static CampaignFieldEnum State()
 * @method static CampaignFieldEnum StatusPayment()
 * @method static CampaignFieldEnum StatusClarification()
 * @method static CampaignFieldEnum SourceId()
 * @method static CampaignFieldEnum Statistics()
 * @method static CampaignFieldEnum Currency()
 * @method static CampaignFieldEnum Funds()
 * @method static CampaignFieldEnum RepresentedBy()
 */
final class CampaignFieldEnum extends Enum
{
    const Id = 'Id';
    const Name = 'Name';
    const ClientInfo = 'ClientInfo';
    const StartDate = 'StartDate';
    const EndDate = 'EndDate';
    const TimeTargeting = 'TimeTargeting';
    const TimeZone = 'TimeZone';
    const NegativeKeywords = 'TimeZone';
    const BlockedIps = 'BlockedIps';
    const ExcludedSites = 'ExcludedSites';
    const DailyBudget = 'DailyBudget';
    const Notification = 'Notification';
    const Type = 'Type';
    const Status = 'Status';
    const State = 'State';
    const StatusPayment = 'StatusPayment';
    const StatusClarification = 'StatusClarification';
    const SourceId = 'SourceId';
    const Statistics = 'Statistics';
    const Currency = 'Currency';
    const Funds = 'Funds';
    const RepresentedBy = 'RepresentedBy';
}