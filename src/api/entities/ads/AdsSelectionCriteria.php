<?php

namespace perf2k2\direct\api\entities\ads;

final class AdsSelectionCriteria
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

    const MAX_IDS = 10000;
    const MAX_CAMPAIGN_IDS = 10;
    const MAX_ADGROUP_IDS = 1000;
    const MAX_VCARD_IDS = 50;
    const MAX_SITELINKSET_IDS = 50;
    const MAX_ADIMAGE_HASHES = 50;
    const MAX_ADEXTENSION_IDS= 50;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
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

    public function setMobile(string $Mobile): self
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    public function setVCardIds(array $VCardIds): self
    {
        $this->VCardIds = $VCardIds;
        return $this;
    }

    public function setSitelinkSetIds(array $SitelinkSetIds): self
    {
        $this->SitelinkSetIds = $SitelinkSetIds;
        return $this;
    }

    public function setAdImageHashes(array $AdImageHashes): self
    {
        $this->AdImageHashes = $AdImageHashes;
        return $this;
    }

    public function setVCardModerationStatuses(array $VCardModerationStatuses): self
    {
        $this->VCardModerationStatuses = $VCardModerationStatuses;
        return $this;
    }

    public function setSitelinksModerationStatuses(array $SitelinksModerationStatuses): self
    {
        $this->SitelinksModerationStatuses = $SitelinksModerationStatuses;
        return $this;
    }

    public function setAdImageModerationStatuses(array $AdImageModerationStatuses): self
    {
        $this->AdImageModerationStatuses = $AdImageModerationStatuses;
        return $this;
    }

    public function setAdExtensionIds(array $AdExtensionIds): self
    {
        $this->AdExtensionIds = $AdExtensionIds;
        return $this;
    }
}