<?php

namespace perf2k2\direct;

use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\CampaignsAdd;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\api\methods\CampaignsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

class Campaigns
{
    public static function getApiName(): string
    {
        return 'campaigns';
    }

    public static function add(): CampaignsAdd
    {
        return new CampaignsAdd(self::getApiName());
    }

    public static function archive(): ArchiveMethod
    {
        return new ArchiveMethod(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): CampaignsGet
    {
        return new CampaignsGet(self::getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod(self::getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod(self::getApiName());
    }

    public static function unarchive(): UnarchiveMethod
    {
        return new UnarchiveMethod(self::getApiName());
    }

    public static function update(): CampaignsUpdate
    {
        return new CampaignsUpdate(self::getApiName());
    }
}