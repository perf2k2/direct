<?php

namespace direct\api\methods;

use direct\api\UpdateMethod;

class RetargetingListsUpdate extends UpdateMethod
{
    protected $RetargetingLists;
    
    public function setRetargetingLists(array $RetargetingLists)
    {
        $this->RetargetingLists = $RetargetingLists;
        return $this;
    }
}