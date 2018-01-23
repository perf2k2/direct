<?php

namespace perf2k2\direct\api\methods;

use api\entities\retargetinglists\RetargetingListSelectionCriteria;
use perf2k2\direct\api\GetMethod;

class RetargetingListsGet extends GetMethod
{
    public function setSelectionCriteria(RetargetingListSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}