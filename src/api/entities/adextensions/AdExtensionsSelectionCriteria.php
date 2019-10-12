<?php

namespace perf2k2\direct\api\entities\adextensions;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\adextensions\AdExtensionStateSelectionEnum;
use perf2k2\direct\api\enums\adextensions\AdExtensionTypeEnum;
use perf2k2\direct\api\enums\adextensions\ExtensionStatusSelectionEnum;

class AdExtensionsSelectionCriteria extends Entity
{
    protected $Ids;
    protected $Types;
    protected $States;
    protected $Statuses;
    protected $ModifiedSince;

    /**
     * @param int[] $Ids
     * @return AdExtensionsSelectionCriteria
     */
    public function setIds(array $Ids): AdExtensionsSelectionCriteria
    {
        $this->Ids = $Ids;
        return $this;
    }

    /**
     * @param AdExtensionTypeEnum[] $Types
     * @return AdExtensionsSelectionCriteria
     */
    public function setTypes(array $Types): AdExtensionsSelectionCriteria
    {
        $this->Types = $Types;
        return $this;
    }

    /**
     * @param AdExtensionStateSelectionEnum[] $States
     * @return AdExtensionsSelectionCriteria
     */
    public function setStates(array $States): AdExtensionsSelectionCriteria
    {
        $this->States = $States;
        return $this;
    }

    /**
     * @param ExtensionStatusSelectionEnum[] $Statuses
     * @return AdExtensionsSelectionCriteria
     */
    public function setStatuses(array $Statuses): AdExtensionsSelectionCriteria
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    public function setModifiedSince(string $ModifiedSince): AdExtensionsSelectionCriteria
    {
        $this->ModifiedSince = $ModifiedSince;
        return $this;
    }
}