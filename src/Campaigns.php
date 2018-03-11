<?php

namespace direct;

use direct\api\services\CampaignsService;
use direct\api\ArchiveMethod;
use direct\api\DeleteMethod;
use direct\api\methods\CampaignsAdd;
use direct\api\methods\CampaignsGet;
use direct\api\methods\CampaignsUpdate;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;
use direct\api\UnarchiveMethod;

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