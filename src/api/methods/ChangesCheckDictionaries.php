<?php

namespace api\methods;

class ChangesCheckDictionaries extends ChangesCheckCampaigns
{
    public static function getApiName(): string
    {
        return 'checkDictionaries';
    }
}