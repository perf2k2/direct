<?php

namespace api\entities\audiencetargets;

use perf2k2\direct\api\Entity;

class AudienceTargetAddItem extends Entity
{
    protected $AdGroupId;
    protected $RetargetingListId;
    protected $InterestId;
    protected $ContextBid;
    protected $StrategyPriority;

    public function setAdGroupId(int $AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setRetargetingListId(int $RetargetingListId)
    {
        $this->RetargetingListId = $RetargetingListId;
        return $this;
    }

    public function setInterestId(int $InterestId)
    {
        $this->InterestId = $InterestId;
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