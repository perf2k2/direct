<?php

namespace api\entities\dynamictextadtargets;

use perf2k2\direct\api\JsonSerializable;

class WebpagesSelectionCriteria extends JsonSerializable
{
    protected $Ids;
    protected $AdGroupIds;
    protected $CampaignIds;
    protected $States;
    
    public function setIds(array $Ids)
    {
        $this->Ids = $Ids;
        return $this;
    }
    
    public function setAdGroupIds(array $AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }
    
    public function setCampaignIds(array $CampaignIds)
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }
    
    public function setStates(array $States)
    {
        $this->States = $States;
        return $this;
    }
}