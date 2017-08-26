<?php

namespace api\entities\audiencetargets;

use perf2k2\direct\api\JsonSerializable;

class AudienceTargetSetBidsItem extends JsonSerializable
{
    protected $Id;
    protected $AdGroupId;
    protected $CampaignId;
    protected $ContextBid;
    protected $StrategyPriority;

    public function setId(int $Id)
    {
        $this->Id = $Id;
        return $this;
    }

    public function setAdGroupId(int $AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setCampaignId(int $CampaignId)
    {
        $this->CampaignId = $CampaignId;
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