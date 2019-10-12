<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\adgroups\AdGroupAddItem;

class AdGroupsAdd extends AddMethod
{
    protected $AdGroups;

    /**
     * @param AdGroupAddItem[] $AdGroups
     * @return AdGroupsAdd
     */
    public function setAdGroups(array $AdGroups): AdGroupsAdd
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}