<?php

namespace perf2k2\direct\api\entities\bids;

use perf2k2\direct\api\JsonSerializable;

final class BidsSelectionCriteria extends JsonSerializable
{
    protected $KeywordIds = [];
    protected $AdGroupIds = [];
    protected $CampaignIds = [];

    const MAX_KEYWORD_IDS = 10000;
    const MAX_ADGROUP_IDS = 1000;
    const MAX_CAMPAIGN_IDS = 10;

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