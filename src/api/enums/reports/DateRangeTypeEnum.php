<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\reports;

use perf2k2\direct\api\Enum;

/**
 * @method static DateRangeTypeEnum TODAY()
 * @method static DateRangeTypeEnum YESTERDAY()
 * @method static DateRangeTypeEnum LAST_3_DAYS()
 * @method static DateRangeTypeEnum LAST_5_DAYS()
 * @method static DateRangeTypeEnum LAST_7_DAYS()
 * @method static DateRangeTypeEnum LAST_14_DAYS()
 * @method static DateRangeTypeEnum LAST_30_DAYS()
 * @method static DateRangeTypeEnum LAST_90_DAYS()
 * @method static DateRangeTypeEnum LAST_365_DAYS()
 * @method static DateRangeTypeEnum THIS_WEEK_MON_TODAY()
 * @method static DateRangeTypeEnum THIS_WEEK_SUN_TODAY()
 * @method static DateRangeTypeEnum LAST_WEEK()
 * @method static DateRangeTypeEnum LAST_BUSINESS_WEEK()
 * @method static DateRangeTypeEnum LAST_WEEK_SUN_SAT()
 * @method static DateRangeTypeEnum THIS_MONTH()
 * @method static DateRangeTypeEnum LAST_MONTH()
 * @method static DateRangeTypeEnum ALL_TIME()
 * @method static DateRangeTypeEnum CUSTOM_DATE()
 * @method static DateRangeTypeEnum AUTO()
 */
class DateRangeTypeEnum extends Enum
{
    const TODAY = 'TODAY';
    const YESTERDAY = 'YESTERDAY';
    const LAST_3_DAYS  = 'LAST_3_DAYS';
    const LAST_5_DAYS = 'LAST_5_DAYS';
    const LAST_7_DAYS = 'LAST_7_DAYS';
    const LAST_14_DAYS = 'LAST_14_DAYS';
    const LAST_30_DAYS = 'LAST_30_DAYS';
    const LAST_90_DAYS = 'LAST_90_DAYS';
    const LAST_365_DAYS = 'LAST_365_DAYS';
    const THIS_WEEK_MON_TODAY = 'THIS_WEEK_MON_TODAY';
    const THIS_WEEK_SUN_TODAY = 'THIS_WEEK_SUN_TODAY';
    const LAST_WEEK = 'LAST_WEEK';
    const LAST_BUSINESS_WEEK = 'LAST_BUSINESS_WEEK';
    const LAST_WEEK_SUN_SAT = 'LAST_WEEK_SUN_SAT';
    const THIS_MONTH = 'THIS_MONTH';
    const LAST_MONTH = 'LAST_MONTH';
    const ALL_TIME = 'ALL_TIME';
    const CUSTOM_DATE = 'CUSTOM_DATE';
    const AUTO = 'AUTO';
}