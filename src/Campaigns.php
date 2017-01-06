<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\CampaignsAdd;
use perf2k2\direct\api\methods\CampaignsArchive;
use perf2k2\direct\api\methods\CampaignsDelete;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\methods\CampaignsResume;
use perf2k2\direct\api\methods\CampaignsUnarchive;
use perf2k2\direct\api\methods\CampaignsUpdate;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class Campaigns extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'campaigns';
    }

    public static function add(): CampaignsAdd
    {
        return new CampaignsAdd((new self())->getApiName());
    }

    public static function archive(): CampaignsArchive
    {
        return new CampaignsArchive((new self())->getApiName());
    }

    public static function delete(): CampaignsDelete
    {
        return new CampaignsDelete((new self())->getApiName());
    }

    public static function get(): CampaignsGet
    {
        return new CampaignsGet((new self())->getApiName());
    }

    public static function resume(): CampaignsResume
    {
        return new CampaignsResume((new self())->getApiName());
    }

    public static function suspend(): CampaignsSuspend
    {
        return new CampaignsSuspend((new self())->getApiName());
    }

    public static function unarchive(): CampaignsUnarchive
    {
        return new CampaignsUnarchive((new self())->getApiName());
    }

    public static function update(): CampaignsUpdate
    {
        return new CampaignsUpdate((new self())->getApiName());
    }

}