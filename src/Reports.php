<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\ReportMethod;
use perf2k2\direct\api\services\ReportsService;

class Reports
{
    public static function build(): ReportMethod
    {
        return (new ReportsService())->build();
    }
}