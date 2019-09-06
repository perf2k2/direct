<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\CampaignsService;
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
    public static function add(): CampaignsAdd
    {
        return (new CampaignsService())->getAddMethod();
    }

    public static function archive(): ArchiveMethod
    {
        return (new CampaignsService())->getArchiveMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new CampaignsService())->getDeleteMethod();
    }

    public static function get(): CampaignsGet
    {
        return (new CampaignsService())->getGetMethod();
    }

    public static function resume(): ResumeMethod
    {
        return (new CampaignsService())->getResumeMethod();
    }

    public static function suspend(): SuspendMethod
    {
        return (new CampaignsService())->getSuspendMethod();
    }

    public static function unarchive(): UnarchiveMethod
    {
        return (new CampaignsService())->getUnArchiveMethod();
    }

    public static function update(): CampaignsUpdate
    {
        return (new CampaignsService())->getUpdateMethod();
    }
}