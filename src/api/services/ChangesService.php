<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\ChangesCheck;
use direct\api\methods\ChangesCheckCampaigns;
use direct\api\methods\ChangesCheckDictionaries;

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