<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\reports;

use perf2k2\direct\api\Enum;

/**
 * @method static ReportTypeEnum ACCOUNT_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum CAMPAIGN_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum ADGROUP_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum AD_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum CRITERIA_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum CUSTOM_REPORT()
 * @method static ReportTypeEnum REACH_AND_FREQUENCY_PERFORMANCE_REPORT()
 * @method static ReportTypeEnum SEARCH_QUERY_PERFORMANCE_REPORT()
 */
class ReportTypeEnum extends Enum
{
    const ACCOUNT_PERFORMANCE_REPORT = 'ACCOUNT_PERFORMANCE_REPORT';
    const CAMPAIGN_PERFORMANCE_REPORT = 'CAMPAIGN_PERFORMANCE_REPORT';
    const ADGROUP_PERFORMANCE_REPORT  = 'ADGROUP_PERFORMANCE_REPORT';
    const AD_PERFORMANCE_REPORT = 'AD_PERFORMANCE_REPORT';
    const CRITERIA_PERFORMANCE_REPORT = 'CRITERIA_PERFORMANCE_REPORT';
    const CUSTOM_REPORT = 'CUSTOM_REPORT';
    const REACH_AND_FREQUENCY_PERFORMANCE_REPORT = 'REACH_AND_FREQUENCY_PERFORMANCE_REPORT';
    const SEARCH_QUERY_PERFORMANCE_REPORT = 'SEARCH_QUERY_PERFORMANCE_REPORT';
}