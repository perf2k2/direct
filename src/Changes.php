<?php

namespace direct;

use direct\api\methods\ChangesCheck;
use direct\api\methods\ChangesCheckCampaigns;
use direct\api\methods\ChangesCheckDictionaries;
use direct\api\services\ChangesService;

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