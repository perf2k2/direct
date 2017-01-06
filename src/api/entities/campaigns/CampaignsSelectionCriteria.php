<?php

namespace perf2k2\direct\api\entities\campaigns;

use perf2k2\direct\api\JsonSerializable;

final class CampaignsSelectionCriteria extends JsonSerializable
{
    protected $Ids = [];
    protected $Types = [];
    protected $States = [];
    protected $Statuses = [];
    protected $StatusesPayment = [];

    const MAX_IDS = 1000;

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

    public function setStatusesPayment(array $StatusesPayment): self
    {
        $this->StatusesPayment = $StatusesPayment;
        return $this;
    }
}