<?php

namespace api\methods;

use perf2k2\direct\api\AbstractMethod;


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