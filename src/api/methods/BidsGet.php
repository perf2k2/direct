<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\bids\BidsSelectionCriteria;
use perf2k2\direct\api\GetMethod;


class BidsGet extends GetMethod
{
    public function setSelectionCriteria(BidsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}