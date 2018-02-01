<?php

namespace api\entities\dynamictextadtargets;

use perf2k2\direct\api\JsonSerializable;

class SetBidsItem extends JsonSerializable
{
    protected $CampaignId;
    protected $AdGroupId;
    protected $Id;
    protected $Bid;
    protected $ContextBid;
    protected $StrategyPriority;
    
    public function setCampaignId(int $CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }
    
    public function setAdGroupId(int $AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }
    
    public function setId(int $Id)
    {
        $this->Id = $Id;
        return $this;
    }
    
    public function setBid(int $Bid)
    {
        $this->Bid = $Bid;
        return $this;
    }
    
    public function setContextBid(int $ContextBid)
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }
    
    public function setStrategyPriority(string $StrategyPriority)
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}