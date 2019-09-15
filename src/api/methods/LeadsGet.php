<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\leads\LeadsSelectionCriteria;
use perf2k2\direct\api\GetMethod;

class LeadsGet extends GetMethod
{
    public function setSelectionCriteria(LeadsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}