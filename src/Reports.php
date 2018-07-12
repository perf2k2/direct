<?php

namespace direct;

use direct\api\methods\ReportMethod;
use direct\api\services\ReportsService;

class Reports
{
    public static function build(): ReportMethod
    {
        return (new ReportsService())->build();
    }
}