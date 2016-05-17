<?php

namespace perf2k2\direct\v5\entities;

class BidsSelectionCriteria
{
    public $KeywordIds = [];
    public $AdGroupIds = [];
    public $CampaignIds = [];

    public function addKeywordIds(array $KeywordIds): self
    {
        $this->KeywordIds = $KeywordIds;
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
}