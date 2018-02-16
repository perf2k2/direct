<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;

final class BidModifiersSelectionCriteria extends Entity
{
    protected $CampaignIds = [];
    protected $AdGroupIds = [];
    protected $Ids = [];
    protected $Types = [];
    protected $Levels = [];

    const MAX_IDS = 10000;
    const MAX_CAMPAIGN_IDS = 10;
    const MAX_ADGROUP_IDS = 1000;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function setCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function setAdGroupIds(array $AdGroupIds): self
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function setTypes(array $Types): self
    {
        $this->Types = $Types;
        return $this;
    }

    public function setLevels(array $Levels): self
    {
        $this->Levels = $Levels;
        return $this;
    }
}