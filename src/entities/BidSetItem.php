<?php

namespace perf2k2\direct\v5\entities;

class BidSetItem
{
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

    public function setBid(int $Bid): self
    {
        $this->Bid = $Bid;
        return $this;
    }

    public function setContextBid(int $ContextBid): self
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }

    public function setStrategyPriority(string $StrategyPriority): self
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}