<?php

namespace perf2k2\direct\api\entities\audiencetargets;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\audiencetargets\AudienceTargetStateEnum;

final class AudienceTargetsSelectionCriteria extends Entity
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

    /**
     * @param int[] $Ids
     * @return $this
     */
    public function setIds(array $Ids): AudienceTargetsSelectionCriteria
    {
        $this->Ids = $Ids;
        return $this;
    }

    /**
     * @param int[] $CampaignIds
     * @return $this
     */
    public function setCampaignIds(array $CampaignIds): AudienceTargetsSelectionCriteria
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    /**
     * @param int[] $AdGroupIds
     * @return $this
     */
    public function setAdGroupIds(array $AdGroupIds): AudienceTargetsSelectionCriteria
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    /**
     * @param int[] $RetargetingListIds
     * @return $this
     */
    public function setRetargetingListIds(array $RetargetingListIds): AudienceTargetsSelectionCriteria
    {
        $this->RetargetingListIds = $RetargetingListIds;
        return $this;
    }

    /**
     * @param int[] $InterestIds
     * @return $this
     */
    public function setInterestIds(array $InterestIds): AudienceTargetsSelectionCriteria
    {
        $this->InterestIds = $InterestIds;
        return $this;
    }

    /**
     * @param AudienceTargetStateEnum[] $States
     * @return $this
     */
    public function setStates(array $States): AudienceTargetsSelectionCriteria
    {
        $this->States = $States;
        return $this;
    }
}