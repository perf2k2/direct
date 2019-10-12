<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\adgroups\AdGroupAppIconStatusSelectionEnum;
use perf2k2\direct\api\enums\adgroups\AdGroupStatusSelectionEnum;
use perf2k2\direct\api\enums\adgroups\AdGroupTypesEnum;
use perf2k2\direct\api\enums\keywordbids\ServingStatusEnum;

final class AdGroupsSelectionCriteria extends Entity
{
    protected $CampaignIds = [];
    protected $Ids = [];
    protected $Types = [];
    protected $Statuses = [];
    protected $AppIconStatuses = [];
    protected $ServingStatuses = [];
    protected $NegativeKeywordSharedSetIds = [];

    /**
     * @param int[] $CampaignIds
     * @return AdGroupsSelectionCriteria
     */
    public function setCampaignIds(array $CampaignIds): AdGroupsSelectionCriteria
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    /**
     * @param int[] $Ids
     * @return AdGroupsSelectionCriteria
     */
    public function setIds(array $Ids): AdGroupsSelectionCriteria
    {
        $this->Ids = $Ids;
        return $this;
    }

    /**
     * @param AdGroupTypesEnum[] $Types
     * @return AdGroupsSelectionCriteria
     */
    public function setTypes(array $Types): AdGroupsSelectionCriteria
    {
        $this->Types = $Types;
        return $this;
    }

    /**
     * @param AdGroupStatusSelectionEnum[] $Statuses
     * @return AdGroupsSelectionCriteria
     */
    public function setStatuses(array $Statuses): AdGroupsSelectionCriteria
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    /**
     * @param AdGroupAppIconStatusSelectionEnum[] $AppIconStatuses
     * @return AdGroupsSelectionCriteria
     */
    public function setAppIconStatuses(array $AppIconStatuses): AdGroupsSelectionCriteria
    {
        $this->AppIconStatuses = $AppIconStatuses;
        return $this;
    }

    /**
     * @param ServingStatusEnum[] $ServingStatuses
     * @return AdGroupsSelectionCriteria
     */
    public function setServingStatuses(array $ServingStatuses): AdGroupsSelectionCriteria
    {
        $this->ServingStatuses = $ServingStatuses;
        return $this;
    }

    /**
     * @param int[] $NegativeKeywordSharedSetIds
     * @return AdGroupsSelectionCriteria
     */
    public function setNegativeKeywordSharedSetIds(array $NegativeKeywordSharedSetIds): AdGroupsSelectionCriteria
    {
        $this->NegativeKeywordSharedSetIds = $NegativeKeywordSharedSetIds;
        return $this;
    }
}