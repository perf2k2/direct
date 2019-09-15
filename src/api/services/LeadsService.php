<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\LeadsGet;

class LeadsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'leads';
    }

    public function getGetMethod(): LeadsGet
    {
        return new LeadsGet($this);
    }
}