<?php

namespace perf2k2\direct\api\entities\audiencetargets;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\PriorityEnum;

class AudienceTargetSetBidsItem extends Entity
{
    protected $Id;
    protected $AdGroupId;
    protected $CampaignId;
    protected $ContextBid;
    protected $StrategyPriority;

    public function setId(int $Id): AudienceTargetSetBidsItem
    {
        $this->Id = $Id;
        return $this;
    }

    public function setAdGroupId(int $AdGroupId): AudienceTargetSetBidsItem
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setCampaignId(int $CampaignId): AudienceTargetSetBidsItem
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    public function setContextBid(int $ContextBid): AudienceTargetSetBidsItem
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }

    public function setStrategyPriority(PriorityEnum $StrategyPriority): AudienceTargetSetBidsItem
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}