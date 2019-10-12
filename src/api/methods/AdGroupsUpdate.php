<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\adgroups\AdGroupUpdateItem;
use perf2k2\direct\api\UpdateMethod;

class AdGroupsUpdate extends UpdateMethod 
{
    protected $AdGroups;

    /**
     * @param AdGroupUpdateItem[] $AdGroups
     * @return AdGroupsUpdate
     */
    public function setAdGroups(array $AdGroups): AdGroupsUpdate
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}