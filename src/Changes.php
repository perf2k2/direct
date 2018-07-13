<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\ChangesCheck;
use perf2k2\direct\api\methods\ChangesCheckCampaigns;
use perf2k2\direct\api\methods\ChangesCheckDictionaries;
use perf2k2\direct\api\services\ChangesService;

class Changes
{
    public static function check(): ChangesCheck
    {
        return (new ChangesService())->check();
    }

    public static function checkCampaigns(): ChangesCheckCampaigns
    {
        return (new ChangesService())->checkCampaigns();
    }

    public static function checkDictionaries(): ChangesCheckDictionaries
    {
        return (new ChangesService())->checkDictionaries();
    }
}