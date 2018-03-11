<?php

namespace direct\api\entities\dynamictextadtargets;

use direct\api\Entity;

class WebpagesSelectionCriteria extends Entity
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