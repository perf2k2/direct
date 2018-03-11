<?php

namespace direct\api\methods;

use direct\api\AbstractMethod;


class ChangesCheckCampaigns extends AbstractMethod
{
    protected $Timestamp;
    
    public function getApiName(): string
    {
        return 'checkCampaigns';
    }
    
    public function setTimestamp(string $Timestamp)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }
}