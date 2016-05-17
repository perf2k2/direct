<?php

namespace perf2k2\direct\v5\entities;

class CampaignsSelectionCriteria
{
    public $Ids = [];
    public $Types = [];
    public $States = [];
    public $Statuses = [];
    public $StatusesPayment = [];

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