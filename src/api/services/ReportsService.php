<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\ReportMethod;

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