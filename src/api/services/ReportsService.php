<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\ReportMethod;

class ReportsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'reports';
    }

    public function build(): ReportMethod
    {
        return new ReportMethod($this);
    }
}