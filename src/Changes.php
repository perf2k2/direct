<?php

namespace perf2k2\direct;

use api\methods\ChangesCheck;
use api\methods\ChangesCheckCampaigns;
use api\methods\ChangesCheckDictionaries;

class Changes
{
    public function getApiName(): string
    {
        return 'changes';
    }

    public static function check(): ChangesCheck
    {
        return new ChangesCheck(self::getApiName());
    }

    public static function checkCampaigns(): ChangesCheckCampaigns
    {
        return new ChangesCheckCampaigns(self::getApiName());
    }

    public static function checkDictionaries(): ChangesCheckDictionaries
    {
        return new ChangesCheckDictionaries(self::getApiName());
    }
}