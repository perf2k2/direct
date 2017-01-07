<?php

namespace perf2k2\direct;

use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\CampaignsAdd;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\methods\CampaignsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

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

    public static function archive(): ArchiveMethod
    {
        return new ArchiveMethod((new self())->getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod((new self())->getApiName());
    }

    public static function get(): CampaignsGet
    {
        return new CampaignsGet((new self())->getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod((new self())->getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod((new self())->getApiName());
    }

    public static function unarchive(): UnarchiveMethod
    {
        return new UnarchiveMethod((new self())->getApiName());
    }

    public static function update(): CampaignsUpdate
    {
        return new CampaignsUpdate((new self())->getApiName());
    }

}