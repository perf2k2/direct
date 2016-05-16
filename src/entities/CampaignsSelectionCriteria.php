<?php

namespace perf2k2\direct\v5\entities;

class CampaignsSelectionCriteria
{
    public $Ids = [];
    public $Types = [];
    public $States = [];
    public $Statuses = [];
    public $StatusesPayment = [];

    public function addIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function addTypes(array $Types): self
    {
        $this->Types = $Types;
        return $this;
    }

    public function addStates(array $States): self
    {
        $this->States = $States;
        return $this;
    }

    public function addStatuses(array $Statuses): self
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    public function addStatusesPayment(array $StatusesPayment): self
    {
        $this->StatusesPayment = $StatusesPayment;
        return $this;
    }
}