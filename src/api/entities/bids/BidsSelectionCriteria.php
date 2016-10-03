<?php

namespace perf2k2\direct\api\entities\bids;

final class BidsSelectionCriteria
{
    public $KeywordIds = [];
    public $AdGroupIds = [];
    public $CampaignIds = [];

    public function setKeywordIds(array $KeywordIds): self
    {
        $this->KeywordIds = $KeywordIds;
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
}