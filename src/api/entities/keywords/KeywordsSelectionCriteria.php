<?php

namespace perf2k2\direct\api\entities\keywords;

use perf2k2\direct\api\JsonSerializable;

final class KeywordsSelectionCriteria extends JsonSerializable
{
    protected $Ids = [];
    protected $AdGroupIds = [];
    protected $CampaignIds = [];
    protected $States = [];
    protected $Statuses = [];

    const MAX_IDS = 10000;
    const MAX_ADGROUP_IDS = 1000;
    const MAX_CAMPAIGN_IDS = 10;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function setAdGroupIds(array $AdGroupIds): self
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function setCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function setStates(array $States): self
    {
        $this->States = $States;
        return $this;
    }

    public function setStatuses(array $Statuses): self
    {
        $this->Statuses = $Statuses;
        return $this;
    }
}