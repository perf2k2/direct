<?php

namespace perf2k2\direct\api\entities\audiencetargets;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\PriorityEnum;

class AudienceTargetAddItem extends Entity
{
    protected $AdGroupId;
    protected $RetargetingListId;
    protected $InterestId;
    protected $ContextBid;
    protected $StrategyPriority;

    public function setAdGroupId(int $AdGroupId): AudienceTargetAddItem
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setRetargetingListId(int $RetargetingListId): AudienceTargetAddItem
    {
        $this->RetargetingListId = $RetargetingListId;
        return $this;
    }

    public function setInterestId(int $InterestId): AudienceTargetAddItem
    {
        $this->InterestId = $InterestId;
        return $this;
    }

    public function setContextBid(int $ContextBid): AudienceTargetAddItem
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }

    public function setStrategyPriority(PriorityEnum $StrategyPriority): AudienceTargetAddItem
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}