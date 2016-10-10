<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Campaigns extends Service implements ServiceInterface
{
    protected $apiName = 'campaigns';

    public static function get(): CampaignsGet
    {
        return new CampaignsGet((new self())->getApiName());
    }
}