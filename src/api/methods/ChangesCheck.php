<?php

namespace api\methods;

use perf2k2\direct\api\Method;
use perf2k2\direct\api\MethodInterface;

class ChangesCheck extends Method implements MethodInterface
{
    protected $CampaignIds;
    protected $AdGroupIds;
    protected $AdIds;
    protected $Timestamp;
    protected $FieldNames;
    
    public static function getApiName(): string
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