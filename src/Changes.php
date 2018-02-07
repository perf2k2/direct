<?php

namespace perf2k2\direct;

use api\methods\ChangesCheck;
use api\methods\ChangesCheckCampaigns;

class Changes
{
    public static function getApiName(): string
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
}