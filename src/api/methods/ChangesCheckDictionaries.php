<?php

namespace perf2k2\direct\api\methods;

class ChangesCheckDictionaries extends ChangesCheckCampaigns
{
    public function getApiName(): string
    {
        return 'checkDictionaries';
    }
}