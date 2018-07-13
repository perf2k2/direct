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
    
    public function check(): ChangesCheck
    {
        return new ChangesCheck($this);
    }
    
    public function checkCampaigns(): ChangesCheckCampaigns
    {
        return new ChangesCheckCampaigns($this);
    }
    
    public function checkDictionaries(): ChangesCheckDictionaries
    {
        return new ChangesCheckDictionaries($this);
    }
}