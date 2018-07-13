<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\NamedMethodInterface;

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