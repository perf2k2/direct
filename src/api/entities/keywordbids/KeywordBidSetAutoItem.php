<?php

namespace perf2k2\direct\api\entities\keywordbids;

use api\entities\keywordbids\BiddingRule;
use perf2k2\direct\api\FilteredEntity;

final class KeywordBidSetAutoItem extends FilteredEntity
{
    protected $CampaignId;
    protected $AdGroupId;
    protected $KeywordId;
    protected $BiddingRule;

    public function setCampaignId(int $CampaignId): self
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    public function setAdGroupId(int $AdGroupId): self
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setKeywordId(int $KeywordId): self
    {
        $this->KeywordId = $KeywordId;
        return $this;
    }

    public function setBiddingRule(BiddingRule $BiddingRule)
    {
        $this->BiddingRule = $BiddingRule;
        return $this;
    }
}