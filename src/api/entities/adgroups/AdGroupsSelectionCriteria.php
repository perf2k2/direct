<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\JsonSerializable;

final class AdGroupsSelectionCriteria extends JsonSerializable
{
    protected $CampaignIds = [];
    protected $Ids = [];
    protected $Types = [];
    protected $Statuses = [];
    protected $AppIconStatuses = [];

    const MAX_IDS = 10000;
    const MAX_CAMPAIGN_IDS = 10;

    public function setCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function setTypes(array $Types): self
    {
        $this->Types = $Types;
        return $this;
    }

    public function setStatuses(array $Statuses): self
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    public function setAppIconStatuses(array $AppIconStatuses): self
    {
        $this->AppIconStatuses = $AppIconStatuses;
        return $this;
    }
}