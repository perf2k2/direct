<?php

namespace direct\api\methods;

use direct\api\AbstractMethod;
use direct\api\NamedMethodInterface;

class ChangesCheckCampaigns extends AbstractMethod implements NamedMethodInterface
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