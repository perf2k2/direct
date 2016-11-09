<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\CampaignsArchive;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\methods\CampaignsUnarchive;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Campaigns extends Service implements ServiceInterface
{
    protected $apiName = 'campaigns';

    public static function archive(): CampaignsArchive
    {
        return new CampaignsArchive((new self())->getApiName());
    }

    public static function get(): CampaignsGet
    {
        return new CampaignsGet((new self())->getApiName());
    }

    public static function unarchive(): CampaignsUnarchive
    {
        return new CampaignsUnarchive((new self())->getApiName());
    }
}