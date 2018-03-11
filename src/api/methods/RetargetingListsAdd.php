<?php

namespace direct\api\methods;

use direct\api\AddMethod;

class RetargetingListsAdd extends AddMethod
{
    protected $RetargetingLists;
    
    public function setRetargetingLists(array $RetargetingLists)
    {
        $this->RetargetingLists = $RetargetingLists;
        return $this;
    }
}