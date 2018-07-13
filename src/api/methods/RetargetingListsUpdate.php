<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\UpdateMethod;

class RetargetingListsUpdate extends UpdateMethod
{
    protected $RetargetingLists;
    
    public function setRetargetingLists(array $RetargetingLists)
    {
        $this->RetargetingLists = $RetargetingLists;
        return $this;
    }
}