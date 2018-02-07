<?php

namespace api\methods;

use perf2k2\direct\api\Method;
use perf2k2\direct\api\MethodInterface;

class ChangesCheckCampaigns extends Method implements MethodInterface
{
    protected $Timestamp;
    
    public static function getApiName(): string
    {
        return 'checkCampaigns';
    }
    
    public function setTimestamp(string $Timestamp)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }
}