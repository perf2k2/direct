<?php

namespace perf2k2\direct\v5\entities;

class KeywordsSelectionCriteria
{
    public $Ids = [];
    public $AdGroupIds = [];
    public $CampaignIds = [];
    public $States = [];
    public $Statuses = [];

    public function addIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function addAdGroupIds(array $AdGroupIds): self
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function addCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function addStates(array $States): self
    {
        $this->States = $States;
        return $this;
    }

    public function addStatuses(array $Statuses): self
    {
        $this->Statuses = $Statuses;
        return $this;
    }
}