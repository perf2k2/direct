<?php

namespace direct\api\methods;

class ChangesCheckDictionaries extends ChangesCheckCampaigns
{
    public function getApiName(): string
    {
        return 'checkDictionaries';
    }
}