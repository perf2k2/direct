<?php

namespace direct\api\methods;

use direct\api\entities\bids\BidsSelectionCriteria;
use direct\api\GetMethod;


class BidsGet extends GetMethod
{
    public function setSelectionCriteria(BidsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}