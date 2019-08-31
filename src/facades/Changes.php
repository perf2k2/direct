<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\ChangesCheck;
use perf2k2\direct\api\methods\ChangesCheckCampaigns;
use perf2k2\direct\api\methods\ChangesCheckDictionaries;
use perf2k2\direct\api\services\ChangesService;

class Changes
{
    public static function check(): ChangesCheck
    {
        return (new ChangesService())->getCheckMethod();
    }

    public static function checkCampaigns(): ChangesCheckCampaigns
    {
        return (new ChangesService())->getCheckCampaignsMethod();
    }

    public static function checkDictionaries(): ChangesCheckDictionaries
    {
        return (new ChangesService())->getCheckDictionariesMethod();
    }
}