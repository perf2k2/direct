<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\NamedMethodInterface;

class ChangesCheck extends AbstractMethod implements NamedMethodInterface
{
    protected $CampaignIds;
    protected $AdGroupIds;
    protected $AdIds;
    protected $Timestamp;
    protected $FieldNames;
    
    public function getApiName(): string
    {
        return 'check';
    }
    
    public function setTimestamp(string $Timestamp)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }
    
    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }
    
    public function setCampaignIds(array $CampaignIds)
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }
    
    public function setAdGroupIds(array $AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }
    
    public function setAdIds(array $AdIds)
    {
        $this->AdIds = $AdIds;
        return $this;
    }
}