<?php

namespace direct\api\methods;

use direct\api\entities\retargetinglists\RetargetingListSelectionCriteria;
use direct\api\GetMethod;

class RetargetingListsGet extends GetMethod
{
    public function setSelectionCriteria(RetargetingListSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}