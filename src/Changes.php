<?php

namespace perf2k2\direct;

use api\methods\ChangesCheck;
use api\methods\ChangesCheckCampaigns;
use api\methods\ChangesCheckDictionaries;
use api\services\ChangesService;

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