<?php

namespace perf2k2\direct\api\entities\keywordbids;

use perf2k2\direct\api\enums\PriorityEnum;
use perf2k2\direct\api\FilteredEntity;

final class KeywordBidSetItem extends FilteredEntity
{
    protected $CampaignId;
    protected $AdGroupId;
    protected $KeywordId;
    protected $SearchBid;
    protected $NetworkBid;
    protected $StrategyPriority;

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

    public function setSearchBid(int $SearchBid)
    {
        $this->SearchBid = $SearchBid;
        return $this;
    }

    public function setNetworkBid(int $NetworkBid)
    {
        $this->NetworkBid = $NetworkBid;
        return $this;
    }

    public function setStrategyPriority(PriorityEnum $StrategyPriority): self
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}