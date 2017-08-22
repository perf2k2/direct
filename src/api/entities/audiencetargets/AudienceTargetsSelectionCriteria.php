<?php

namespace perf2k2\direct\api\entities\audiencetargets;

use perf2k2\direct\api\JsonSerializable;

final class AudienceTargetsSelectionCriteria extends JsonSerializable
{
    protected $Ids = [];
    protected $States = [];
    protected $CampaignIds = [];
    protected $AdGroupIds = [];
    protected $RetargetingListIds = [];
    protected $InterestIds = [];

    const MAX_IDS = 10000;
    const MAX_CAMPAIGN_IDS = 100;
    const MAX_ADGROUP_IDS = 1000;
    const MAX_RETARGETING_LIST_IDS = 1000;
    const MAX_INTEREST_IDS = 1000;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function setStates(array $States): self
    {
        $this->States = $States;
        return $this;
    }

    public function setCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function setAdGroupIds(array $AdGroupIds): self
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function setRetargetingListIds(array $RetargetingListIds)
    {
        $this->RetargetingListIds = $RetargetingListIds;
        return $this;
    }

    public function setInterestIds(array $InterestIds)
    {
        $this->InterestIds = $InterestIds;
        return $this;
    }
}