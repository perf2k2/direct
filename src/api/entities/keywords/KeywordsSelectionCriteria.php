<?php

namespace perf2k2\direct\api\entities\keywords;

final class KeywordsSelectionCriteria
{
    public $Ids = [];
    public $AdGroupIds = [];
    public $CampaignIds = [];
    public $States = [];
    public $Statuses = [];

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