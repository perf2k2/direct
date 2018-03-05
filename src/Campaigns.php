<?php

namespace perf2k2\direct;

use api\services\CampaignsService;
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
        return (new CampaignsService())->add();
    }

    public static function archive(): ArchiveMethod
    {
        return (new CampaignsService())->archive();
    }

    public static function delete(): DeleteMethod
    {
        return (new CampaignsService())->delete();
    }

    public static function get(): CampaignsGet
    {
        return (new CampaignsService())->get();
    }

    public static function resume(): ResumeMethod
    {
        return (new CampaignsService())->resume();
    }

    public static function suspend(): SuspendMethod
    {
        return (new CampaignsService())->suspend();
    }

    public static function unarchive(): UnarchiveMethod
    {
        return (new CampaignsService())->unarchive();
    }

    public static function update(): CampaignsUpdate
    {
        return (new CampaignsService())->update();
    }
}