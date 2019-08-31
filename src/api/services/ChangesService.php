<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\ChangesCheck;
use perf2k2\direct\api\methods\ChangesCheckCampaigns;
use perf2k2\direct\api\methods\ChangesCheckDictionaries;

class ChangesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'changes';
    }
    
    public function getCheckMethod(): ChangesCheck
    {
        return new ChangesCheck($this);
    }
    
    public function getCheckCampaignsMethod(): ChangesCheckCampaigns
    {
        return new ChangesCheckCampaigns($this);
    }
    
    public function getCheckDictionariesMethod(): ChangesCheckDictionaries
    {
        return new ChangesCheckDictionaries($this);
    }
}