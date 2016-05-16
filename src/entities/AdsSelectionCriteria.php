<?php

namespace perf2k2\direct\v5\entities;

class AdsSelectionCriteria
{
    public $Ids = [];
    public $States = [];
    public $Statuses = [];
    public $CampaignIds = [];
    public $AdGroupIds = [];
    public $Types = [];
    public $Mobile = 'NO';
    public $VCardIds = [];
    public $SitelinkSetIds = [];
    public $AdImageHashes = [];
    public $VCardModerationStatuses = [];
    public $SitelinksModerationStatuses = [];
    public $AdImageModerationStatuses = [];
    public $AdExtensionIds = [];

    public function addIds(array $Ids): self
    {
        $this->Ids = $Ids;
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

    public function addCampaignIds(array $CampaignIds): self
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function addAdGroupIds(array $AdGroupIds): self
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function addTypes(array $Types): self
    {
        $this->Types = $Types;
        return $this;
    }

    public function addMobile(string $Mobile): self
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    public function addVCardIds(array $VCardIds): self
    {
        $this->VCardIds = $VCardIds;
        return $this;
    }

    public function addSitelinkSetIds(array $SitelinkSetIds): self
    {
        $this->SitelinkSetIds = $SitelinkSetIds;
        return $this;
    }

    public function addAdImageHashes(array $AdImageHashes): self
    {
        $this->AdImageHashes = $AdImageHashes;
        return $this;
    }

    public function addVCardModerationStatuses(array $VCardModerationStatuses): self
    {
        $this->VCardModerationStatuses = $VCardModerationStatuses;
        return $this;
    }

    public function addSitelinksModerationStatuses(array $SitelinksModerationStatuses): self
    {
        $this->SitelinksModerationStatuses = $SitelinksModerationStatuses;
        return $this;
    }

    public function addAdImageModerationStatuses(array $AdImageModerationStatuses): self
    {
        $this->AdImageModerationStatuses = $AdImageModerationStatuses;
        return $this;
    }

    public function addAdExtensionIds(array $AdExtensionIds): self
    {
        $this->AdExtensionIds = $AdExtensionIds;
        return $this;
    }
}