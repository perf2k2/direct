<?php

namespace api\services;

use api\AbstractService;
use api\methods\ChangesCheck;
use api\methods\ChangesCheckCampaigns;
use api\methods\ChangesCheckDictionaries;

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