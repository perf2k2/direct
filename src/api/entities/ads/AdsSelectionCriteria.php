<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\ad\AdStateSelectionEnum;
use perf2k2\direct\api\enums\ad\AdStatusSelectionEnum;
use perf2k2\direct\api\enums\ad\AdTypeEnum;
use perf2k2\direct\api\enums\adextensions\ExtensionStatusSelectionEnum;
use perf2k2\direct\api\enums\YesNoEnum;

final class AdsSelectionCriteria extends Entity
{
    protected $Ids = [];
    protected $States = [];
    protected $Statuses = [];
    protected $CampaignIds = [];
    protected $AdGroupIds = [];
    protected $Types = [];
    protected $Mobile = 'NO';
    protected $VCardIds = [];
    protected $SitelinkSetIds = [];
    protected $AdImageHashes = [];
    protected $VCardModerationStatuses = [];
    protected $SitelinksModerationStatuses = [];
    protected $AdImageModerationStatuses = [];
    protected $AdExtensionIds = [];

    const MAX_IDS = 10000;
    const MAX_CAMPAIGN_IDS = 10;
    const MAX_ADGROUP_IDS = 1000;
    const MAX_VCARD_IDS = 50;
    const MAX_SITELINKSET_IDS = 50;
    const MAX_ADIMAGE_HASHES = 50;
    const MAX_ADEXTENSION_IDS= 50;

    /**
     * @param int[] $Ids
     * @return AdsSelectionCriteria
     */
    public function setIds(array $Ids): AdsSelectionCriteria
    {
        $this->Ids = $Ids;
        return $this;
    }

    /**
     * @param int[] $CampaignIds
     * @return AdsSelectionCriteria
     */
    public function setCampaignIds(array $CampaignIds): AdsSelectionCriteria
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    /**
     * @param int[] $AdGroupIds
     * @return AdsSelectionCriteria
     */
    public function setAdGroupIds(array $AdGroupIds): AdsSelectionCriteria
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    /**
     * @param AdStateSelectionEnum[] $States
     * @return AdsSelectionCriteria
     */
    public function setStates(array $States): AdsSelectionCriteria
    {
        $this->States = $States;
        return $this;
    }

    /**
     * @param AdStatusSelectionEnum[] $Statuses
     * @return AdsSelectionCriteria
     */
    public function setStatuses(array $Statuses): AdsSelectionCriteria
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    /**
     * @param AdTypeEnum[] $Types
     * @return AdsSelectionCriteria
     */
    public function setTypes(array $Types): AdsSelectionCriteria
    {
        $this->Types = $Types;
        return $this;
    }

    public function setMobile(YesNoEnum $Mobile): AdsSelectionCriteria
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * @param int[] $VCardIds
     * @return AdsSelectionCriteria
     */
    public function setVCardIds(array $VCardIds): AdsSelectionCriteria
    {
        $this->VCardIds = $VCardIds;
        return $this;
    }

    /**
     * @param int[] $SitelinkSetIds
     * @return AdsSelectionCriteria
     */
    public function setSitelinkSetIds(array $SitelinkSetIds): AdsSelectionCriteria
    {
        $this->SitelinkSetIds = $SitelinkSetIds;
        return $this;
    }

    /**
     * @param string[] $AdImageHashes
     * @return AdsSelectionCriteria
     */
    public function setAdImageHashes(array $AdImageHashes): AdsSelectionCriteria
    {
        $this->AdImageHashes = $AdImageHashes;
        return $this;
    }

    /**
     * @param ExtensionStatusSelectionEnum[] $VCardModerationStatuses
     * @return AdsSelectionCriteria
     */
    public function setVCardModerationStatuses(array $VCardModerationStatuses): AdsSelectionCriteria
    {
        $this->VCardModerationStatuses = $VCardModerationStatuses;
        return $this;
    }

    /**
     * @param ExtensionStatusSelectionEnum[] $SitelinksModerationStatuses
     * @return AdsSelectionCriteria
     */
    public function setSitelinksModerationStatuses(array $SitelinksModerationStatuses): AdsSelectionCriteria
    {
        $this->SitelinksModerationStatuses = $SitelinksModerationStatuses;
        return $this;
    }

    /**
     * @param ExtensionStatusSelectionEnum[] $AdImageModerationStatuses
     * @return AdsSelectionCriteria
     */
    public function setAdImageModerationStatuses(array $AdImageModerationStatuses): AdsSelectionCriteria
    {
        $this->AdImageModerationStatuses = $AdImageModerationStatuses;
        return $this;
    }

    /**
     * @param int[] $AdExtensionIds
     * @return AdsSelectionCriteria
     */
    public function setAdExtensionIds(array $AdExtensionIds): AdsSelectionCriteria
    {
        $this->AdExtensionIds = $AdExtensionIds;
        return $this;
    }
}